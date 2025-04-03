@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="p-10">
        <div class="container mx-auto px-4">
            <div class="border-t-2 border-gray-300 my-4 py-4 text-center">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-6 ">
                <!-- Card 1 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Komunitas Belajar" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/komunitas-belajar/IMG-20241017-WA0097.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Guru</h2>
                        <p class="text-gray-500">
                            Beberapa Foto Guru - Guru SDN Bojongloa 1</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('komunitas-belajar') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang Shalat Dhuha" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/shalat/IMG-20241017-WA0107.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Shalat Dhuha</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan kegiatan shalat dhuha</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('shalat-dhuha') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang Upacara Bendera" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/upacara/IMG-20241017-WA0108.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Upacara</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan kegiatan upacara bendera</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('upacara') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang upacara pramuka" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/pramuka/IMG-20241017-WA0103.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Pramuka</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan upacara pramuka</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('pramuka') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang ANBK" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/ANBK/IMG-20241017-WA0100.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">ANBK</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan ANBK</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('anbk') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang berkegiatan belajar" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/pembelajaran/IMG-20241017-WA0129.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Pembelajaran</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan kegiatan pembelajaran</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('pembelajaran') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Program bantuan" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/program/IMG-20241017-WA0134.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Program</h2>
                        <p class="text-gray-500">
                            Beberapa foto program bantuan</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('program') }}">Lihat Foto</a>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="bg-white overflow-hidden flex justify-center">
                    <img alt="Murid sedang berkegiatan senam" class="w-64 h-40 rounded-md"
                        src="{{ asset('images/gallery/senam/IMG-20241017-WA0140.png') }}" />
                    <div class="p-4 w-1/2">
                        <h2 class="text-xl font-bold text-white rounded px-2 py-1"
                            style="background-color: rgba(14, 165, 233, 0.75);">Senam</h2>
                        <p class="text-gray-500">
                            Beberapa foto sedang melaksanakan senam</p>
                        <a class="text-blue-600 hover:underline" href="{{ route('senam') }}">Lihat Foto</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
