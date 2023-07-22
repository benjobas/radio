<?php

return [
    'navigations' => [
        'Dashboard' => 'Dashboard',
        'Hotel' => 'Hotel',
        'Website' => 'Website',
        'Help Center' => 'Help Center',
        'Administration' => 'Administration',
        'User Management' => 'User Management',
        'Profile Management' => 'Profile Management',
    ],

    'resources' => [
        'dashboard' => [
            'navigation_label' => 'Dashboard'
        ],
        'achievements' => [
            'navigation_label' => 'Manage Achievements',
            'label' => 'Achievement',
            'plural' => 'Achievements',
        ],
        'emulator-settings' => [
            'navigation_label' => 'Emulator Settings',
            'label' => 'Setting',
            'plural' => 'Emulator Settings',
        ],
        'article' => [
            'navigation_label' => 'Manage Articles',
            'label' => 'Article',
            'plural' => 'Articles',
        ],
        'cms-settings' => [
            'navigation_label' => 'CMS Settings',
            'label' => 'Setting',
            'plural' => 'CMS Settings',
        ],
        'help-questions-categories' => [
            'navigation_label' => 'Manage Categories',
            'label' => 'Category',
            'plural' => 'Question Categories',
        ],
        'help-questions' => [
            'navigation_label' => 'Manage Questions',
            'label' => 'Question',
            'plural' => 'Questions',
        ],
        'tags' => [
            'navigation_label' => 'Manage Tags',
            'label' => 'Tag',
            'plural' => 'Tags',
        ],
        'bans' => [
            'navigation_label' => 'Manage Bans',
            'label' => 'Ban',
            'plural' => 'Bans',
        ],
        'users' => [
            'navigation_label' => 'Manage Users',
            'label' => 'User',
            'plural' => 'Users',
        ],
        'badge-resource' => [
            'navigation_label' => 'Manage Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
        'home-items' => [
            'navigation_label' => 'Manage Home Items',
            'label' => 'Home Item',
            'plural' => 'Home Items',
        ],
        'home-categories' => [
            'navigation_label' => 'Manage Home Categories',
            'label' => 'Home Category',
            'plural' => 'Home Categories',
        ],

        // Relations
        'settings' => [
            'navigation_label' => 'Settings',
            'label' => 'Setting',
            'plural' => 'Settings',
        ],
        'badges' => [
            'navigation_label' => 'Badges',
            'label' => 'Badge',
            'plural' => 'Badges',
        ],
    ],

    'common' => [
        'All' => 'All',
        'Yes' => 'Yes',
        'No' => 'No',
        'Sucessfull' => 'Successful',
        'Never' => 'Never',
        'Account' => 'Account',
        'IP' => 'IP',
        'Machine' => 'Machine',
        'Super' => 'Super',
        'Male' => 'Male',
        'Female' => 'Female',
        'Credits' => 'Credits',
        'Duckets' => 'Duckets',
        'Diamonds' => 'Diamonds',
        'Points' => 'Points',
        'Update' => 'Update',
        'Create' => 'Create',
        'Open link' => 'Open link',
        'Sticker' => 'Sticker',
        'Widget' => 'Widget',
        'Note' => 'Note',
        'Background' => 'Background',
    ],

    'helpers' => [
        'achievement_points' => 'Achievement points to be rewarded',
        'achievement_progress_needed' => 'Progress needed to complete the achievement',
        'help_questions_category_icon' => 'You can use any image link here. We recommend using an image with a size of 20x20.',
        'change_username_description' => 'Allow this user to change their username (within the client)',
        'change_password_description' => 'Leave blank to keep the current password',
        'badge_code_helper' => 'Enter the code and click on the magnifying glass next to the field. If the badge exists, all fields will be filled in automatically.',
        'home_item_limit_helper' => 'Buy limit for this item. Leave blank for unlimited.',
    ],

    'tabs' => [
        'Home' => 'Home',
        'Main' => 'Main',
        'Configurations' => 'Configurations',
        'General Information' => 'General Information',
        'Currencies' => 'Currencies',
        'Security' => 'Security',
        'Change Username' => 'Change Username',
        'Change Email' => 'Change Email',
        'Change Password' => 'Change Password',
        'Change Rank' => 'Change Rank',
        'Account Data' => 'Account Data',
        'Extra Settings' => 'Extra Settings',
    ],

    'inputs' => [
        'key' => 'Key',
        'value' => 'Value',
        'comment' => 'Comment',
        'name' => 'Name',
        'level' => 'Level',
        'email' => 'Email',
        'category' => 'Category',
        'visible' => 'Visible',
        'reward_type' => 'Reward Type',
        'reward_amount' => 'Reward Amount',
        'points' => 'Points',
        'progress_needed' => 'Progress Needed',
        'fixed' => 'Fixed',
        'allow_comments' => 'Allow Comments',
        'title' => 'Title',
        'description' => 'Description',
        'image' => 'Image',
        'icon' => 'Icon',
        'content' => 'Content',
        'is_promotion' => 'Is this article a promotion?',
        'promotion_ends_at' => 'Promotion ends at',
        'categories' => 'Categories',
        'background_color' => 'Background Color',
        'expires_at' => 'Expires at',
        'reason' => 'Reason',
        'type' => 'Type',
        'username' => 'Username',
        'motto' => 'Motto',
        'gender' => 'Gender',
        'created_at' => 'Created At',
        'last_login' => 'Last Login',
        'last_online' => 'Last Online',
        'ip_register' => 'Registration IP',
        'ip_current' => 'Current IP',
        'referral_code' => 'Referral Code',
        'referrer_code' => 'Referrer Code',
        'allow_change_username' => 'Allow username change',
        'new_password' => 'New Password',
        'new_password_confirmation' => 'Confirm New Password',
        'rank' => 'Rank',
        'badge_code' => 'Badge Code',
        'achievement_score' => 'Achievement Score',
        'respects_received' => 'Respects Received',
        'can_trade' => 'Can Trade?',
        'block_following' => 'Block Following',
        'block_friendrequests' => 'Block Friend Requests',
        'block_roominvites' => 'Block Room Invites',
        'max_rooms' => 'Max Rooms',
        'max_friends' => 'Max Friends',
        'old_chat' => 'Old Chat',
        'block_camera_follow' => 'Block Camera Follow',
        'ignore_bots' => 'Ignore Bots',
        'ignore_pets' => 'Ignore Pets',
        'badge_code' => 'Badge Code',
        'badge_title' => 'Badge Title',
        'badge_description' => 'Badge Description',
        'badge_image' => 'Badge Image',
        'price' => 'Price',
        'currency_type' => 'Currency Type',
        'limit' => 'Limit',
    ],

    'columns' => [
        'id' => 'ID',
        'badge' => 'Badge',
        'name' => 'Name',
        'level' => 'Level',
        'category' => 'Category',
        'visible' => 'Visible',
        'key' => 'Key',
        'value' => 'Value',
        'title' => 'Title',
        'image' => 'Image',
        'by' => 'By',
        'fixed' => 'Fixed',
        'allow_comments' => 'Allow Comments',
        'comment' => 'Comment',
        'order' => 'Order',
        'icon' => 'Icon',
        'questions_count' => 'Linked Questions',
        'background_color' => 'Background Color',
        'avatar' => 'Avatar',
        'username' => 'Username',
        'reason' => 'Reason',
        'type' => 'Type',
        'banned_at' => 'Banned At',
        'expires_at' => 'Expires At',
        'email' => 'Email',
        'motto' => 'Motto',
        'created_at' => 'Created At',
        'online' => 'Online?',
        'badge_code' => 'Badge Code',
        'equipped' => 'Equipped?',
        'achievement_score' => 'Achievement Score',
        'respects_received' => 'Respects Received',
        'online_time' => 'Online Time',
        'can_trade' => 'Can Trade?',
        'can_change_name' => 'Can Change Name?',
        'price' => 'Price',
    ],

    'notifications' => [
        'badge_code_required' => 'You need to enter a badge code.',
        'badge_found' => 'Badge found!',
        'badge_updated' => 'Badge updated successfully!',
        'badge_update_failed' => 'Badge update failed.',
    ]
];
