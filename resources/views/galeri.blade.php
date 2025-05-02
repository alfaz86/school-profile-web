@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="p-5 md:p-10">
        <div class="container mx-auto px-4">
            <div class="border-t-2 border-gray-300 my-4 py-4 text-center">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
                @foreach ($galleries as $gallery)
                    <div class="bg-white overflow-hidden flex flex-col lg:flex-row items-center mb-6">
                        @php
                            $firstImage = $gallery->images->first();
                        @endphp

                        <!-- Tampilkan gambar (hanya dari file_data) -->
                        <img alt="{{ $gallery->title }}" class="w-full lg:w-1/2 rounded-md"
                            @if ($firstImage)
                                src="data:image/png;base64,{{ base64_encode($firstImage->file_data) }}"
                            @else
                                src="{{ asset('images/default-image.png') }}"
                            @endif
                        />

                        <div class="pt-4 lg:p-4 w-full lg:w-1/2">
                            <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                                style="background-color: rgba(14, 165, 233, 0.75);">{{ $gallery->title }}</h2>
                            <p class="text-gray-500">{{ $gallery->description }}</p>
                            <a class="text-blue-600 hover:underline"
                                href="{{ route('gallery.show', $gallery->slug) }}">Lihat Foto</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
