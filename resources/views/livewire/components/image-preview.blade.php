@if ($imageUrl && $fileName)
    <div class="fi-fo-field-wrp">
        <div class="space-y-2">
            <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3">
                <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                    Foto Saat Ini
                </span>
            </label>

            <div
                class="relative fi-fo-field-wrp-container overflow-hidden rounded-lg bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-950/10 dark:ring-white/20">
                <div class=" flex justify-center items-center bg-gray-50 dark:bg-gray-800">
                    <div class="relative" style="max-height: 250px; width: auto;">
                        <img src="{{ $imageUrl }}" class="object-contain mx-auto"
                            style="max-height: 250px; width: auto; display: block;" alt="Foto Saat Ini"
                            onload="this.parentNode.style.height = this.naturalHeight > 250 ? '250px' : this.naturalHeight + 'px'" />
                    </div>
                </div>
            </div>

            @if ($fileName)
                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 truncate">
                    {{ $fileName }}
                </p>
            @endif
        </div>
    </div>
@else
    <div class="fi-fo-field-wrp">
        <div class="space-y-2">
            <label class="fi-fo-field-wrp-label inline-flex items-center gap-x-3">
                <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                    Foto Saat Ini
                </span>
            </label>

            <div
                class="relative fi-fo-field-wrp-container overflow-hidden rounded-lg bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-950/10 dark:ring-white/20">
                <div class="p-6 text-center bg-gray-50 dark:bg-gray-800">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <svg class="h-8 w-8 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            No image available
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
