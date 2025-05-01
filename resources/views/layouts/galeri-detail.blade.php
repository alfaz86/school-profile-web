@extends('layouts.app')
@section('content')
    <main class="p-8 md:p-12">
        <h1 class="text-center text-2xl lg:text-3xl font-bold">
            {{ $title }}
        </h1>
    </main>
    @foreach ($gallery as $item)
        <section class="pb-6">
            <div class="container mx-auto px-10 md:px-12">
                <div class="flex justify-center">
                    <img src="data:image/png;base64,{{ base64_encode($item->file_data) }}" alt="Komunitas Belajar"
                        class="w-931px h-479px rounded-md" loading="lazy" decoding="async">
                </div>
            </div>
        </section>
    @endforeach
@endsection
