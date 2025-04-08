@extends('layouts.app')
@section('content')
    <main class="p-8 md:p-12">
        <h1 class="text-center text-2xl lg:text-3xl font-bold">
            Pramuka
        </h1>
    </main>
    <section class="pb-6">
        <div class="container mx-auto px-10 md:px-12">
            <div class="flex justify-center">
                <img src="{{ asset('images/gallery/pramuka/IMG-20241017-WA0103.png') }}"
                    alt="Murid sedang berkegiatan pramuka" class="w-931px h-479px rounded-md">
            </div>
        </div>
    </section>
    <section class="pb-6">
        <div class="container mx-auto px-10 md:px-12">
            <div class="flex justify-center">
                <img src="{{ asset('images/gallery/pramuka/IMG-20241017-WA0110.png') }}"
                    alt="Murid sedang berkegiatan pramuka" class="w-931px h-479px rounded-md">
            </div>
        </div>
    </section>
    <section class="pb-6">
        <div class="container mx-auto px-10 md:px-12">
            <div class="flex justify-center">
                <img src="{{ asset('images/gallery/pramuka/IMG-20241017-WA0104.png') }}"
                    alt="Murid sedang berkegiatan pramuka" class="w-931px h-479px rounded-md">
            </div>
        </div>
    </section>
@endsection
