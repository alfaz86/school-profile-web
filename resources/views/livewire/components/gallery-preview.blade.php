@if ($images && $images->count())
    <div class="space-y-4">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Gallery Foto
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach ($images as $image)
                @php
                    $fileData = $image->file_data ?? '';
                    $fileName = $image->file_name ?? '';
                    $fileData = is_string($fileData) ? $fileData : '';

                    // Deteksi MIME type
                    $mime = 'image/jpeg'; // default
                    $signature = substr($fileData, 0, 4);

                    if (str_starts_with($signature, "\xFF\xD8\xFF")) {
                        $mime = 'image/jpeg';
                    } elseif (str_starts_with($signature, "\x89PNG")) {
                        $mime = 'image/png';
                    } elseif (str_starts_with($signature, 'GIF8')) {
                        $mime = 'image/gif';
                    } elseif (str_starts_with($signature, "\x00\x00\x01\x00")) {
                        $mime = 'image/x-icon';
                    } elseif (str_starts_with($signature, 'RIFF') && substr($fileData, 8, 4) === 'WEBP') {
                        $mime = 'image/webp';
                    }

                    $base64 = base64_encode($fileData);
                    $imageUrl = "data:{$mime};base64,{$base64}";
                @endphp

                <div
                    class="relative overflow-hidden rounded-lg bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-950/10 dark:ring-white/20 p-2 flex flex-col items-center">
                    <div class="flex items-center justify-center bg-gray-50 dark:bg-gray-800 w-full"
                        style="height: 200px;">
                        <img src="{{ $imageUrl }}" alt="{{ $fileName }}" class="object-cover w-full h-full" />
                    </div>
                    <p class="text-xs text-gray-600 dark:text-gray-400 mt-2 text-center truncate w-full">
                        {{ $fileName }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@else
    <div class="text-center py-8">
        <div class="flex flex-col items-center justify-center gap-3">
            <svg class="h-10 w-10 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Belum ada gambar yang tersedia.
            </p>
        </div>
    </div>
@endif
