@props([
    'type' => null,
    'title' => null,
    'subTitle' => null,
    'alpineModel' => 'modalOpen'
])

<div tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden bg-black/50 overflow-y-auto md:inset-0 h-full max-h-full hidden justify-center items-center"
    :class="{ 'hidden': !{{ $alpineModel }}, 'flex': {{ $alpineModel }} }"
    x-transition
    x-show="{{ $alpineModel }}"
    x-on:click.self="{{ $alpineModel }} = false"
    x-on:keydown.escape.prevent.stop="{{ $alpineModel }} = false"
>
    <div class="relative w-full max-w-md max-h-full">
        {{-- <div class="card bg-blue-500 shadow-lg shadow-blue-700/75 w-full h-full rounded-3xl absolute  transform -rotate-3"></div>
        <div class="card bg-blue-400 shadow-blue-600/75 shadow-lg w-full h-full rounded-3xl absolute  transform rotate-3"></div> --}}
        <div class="relative w-full md:w-auto bg-white rounded-lg shadow dark:bg-slate-900">
            <button @click="{{ $alpineModel }} = false" type="button" class="absolute top-3 right-2.5 text-gray-400 dark:text-gray-200 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                <i class="fa-solid fa-xmark"></i>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center">
                @if($title) <h2 class="text-2xl font-semibold text-gray-700 dark:text-white text-center">{{ $title }}</h2> @endif
                @if($subTitle) <p class="text-lg text-gray-600 text-center dark:text-gray-400">{{ $subTitle }}</p> @endif

                @if (empty($type))
                    {{ $slot }}
                @else
                    <x-dynamic-component component="ui.modal-templates.{{ $type }}" :attributes="$attributes" />
                @endif
            </div>
        </div>
    </div>
</div>
