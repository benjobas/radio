<?php

namespace App\Filament\Resources\Hotel;

use App\Enums\AchievementCategory;
use App\Enums\CurrencyType;
use Filament\Forms;
use Filament\Tables;
use App\Models\Achievement;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Columns\TextColumn;
use App\Tables\Columns\HabboBadgeColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Hotel\AchievementResource\Pages;
use App\Filament\Resources\Hotel\AchievementResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\SelectFilter;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Hotel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Main')
                    ->tabs([
                        Tabs\Tab::make('Home')
                            ->icon('heroicon-o-home')
                            ->schema([
                                TextInput::make('name')
                                    ->placeholder('Achievement Name')
                                    ->required()
                                    ->autocomplete()
                                    ->columnSpan('full'),

                                TextInput::make('level')
                                    ->placeholder('Achievement Level')
                                    ->numeric()
                                    ->required()
                                    ->autocomplete()
                                    ->columnSpan('full'),

                                Select::make('category')
                                    ->placeholder('Achievement Category')
                                    ->disablePlaceholderSelection()
                                    ->options(AchievementCategory::toInput())
                            ]),

                        Tabs\Tab::make('Configurations')
                            ->icon('heroicon-o-cog')
                            ->schema([
                                Select::make('visible')
                                    ->disablePlaceholderSelection()
                                    ->options([
                                        '1' => 'Yes',
                                        '0' => 'No',
                                    ]),

                                Select::make('reward_type')
                                    ->disablePlaceholderSelection()
                                    ->options(CurrencyType::toInput()),

                                TextInput::make('reward_amount')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('points')
                                    ->helperText('Achievement Points to be rewarded')
                                    ->numeric()
                                    ->required(),

                                TextInput::make('progress_needed')
                                    ->helperText('Progress needed to complete the achievement')
                                    ->numeric()
                                    ->required()
                            ])
                    ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID'),

                HabboBadgeColumn::make('badge')
                    ->label('Badge'),

                TextColumn::make('name')
                    ->label('Name'),

                TextColumn::make('level')
                    ->label('Level'),

                BadgeColumn::make('category')
                    ->label('Category')
                    ->toggleable(),

                ToggleColumn::make('visible')
                    ->label('Visible')
                    ->disabled()
                    ->toggleable()
            ])
            ->filters([
                SelectFilter::make('visible')
                    ->options([
                        '1' => 'Yes',
                        '0' => 'No',
                    ])
                    ->label('Visible')
                    ->placeholder('All'),

                SelectFilter::make('category')
                    ->options(AchievementCategory::toInput())
                    ->label('Category')
                    ->placeholder('All'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
