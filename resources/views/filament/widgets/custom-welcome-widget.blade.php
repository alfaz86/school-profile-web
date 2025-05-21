@php
    $user = filament()->auth()->user();
@endphp

<x-filament-widgets::widget class="fi-account-widget">
    <x-filament::section>
        <!-- Desktop Layout (hidden on mobile) -->
        <div class="hidden md:flex items-center gap-x-4">
            <x-filament-panels::avatar.user size="lg" :user="$user" />

            <div class="flex-1">
                <h2 class="text-base font-semibold leading-6 text-gray-950 dark:text-white">
                    {{ __('filament-panels::widgets/account-widget.welcome', ['app' => config('app.name')]) }}
                </h2>
                <p class="text-sm text-gray-500 dark:text-gray-400">
                    {{ filament()->getUserName($user) }}
                </p>
            </div>

            <div class="flex items-center gap-x-2">
                <x-filament::button color="gray" icon="heroicon-o-home" tag="a" href="/" outlined
                    class="hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    View Website
                </x-filament::button>
            </div>
        </div>

        <!-- Mobile Layout (hidden on desktop) -->
        <div class="md:hidden flex flex-col gap-4">
            <div class="flex items-center gap-3 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm">
                <x-filament-panels::avatar.user size="lg" :user="$user" />

                <div class="flex-1 min-w-0">
                    <h2 class="text-base font-semibold leading-6 text-gray-950 dark:text-white truncate">
                        {{ __('filament-panels::widgets/account-widget.welcome', ['app' => config('app.name')]) }}
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400 truncate">
                        {{ filament()->getUserName($user) }}
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 px-4">
                <x-filament::button color="gray" icon="heroicon-o-home" tag="a" href="/" outlined
                    full-width size="sm" class="hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    Website
                </x-filament::button>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
