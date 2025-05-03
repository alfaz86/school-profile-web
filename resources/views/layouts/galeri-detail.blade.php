@extends('layouts.app')
@section('content')
    <main class="p-8 md:p-12">
        <h1 class="text-center text-2xl lg:text-3xl font-bold">
            {{ $headline }}
        </h1>
    </main>
    @foreach ($images as $item)
        <section class="pb-6">
            <div class="container mx-auto px-10 md:px-12">
                <div class="flex justify-center">
                    <img src="{{ route('image.stream', [
                            'id' => $item->id,
                            'v' => $item->updated_at->timestamp
                        ]) }}" alt="Komunitas Belajar"
                        class="w-931px h-479px rounded-md" loading="lazy" decoding="async">
                </div>
            </div>
        </section>
    @endforeach
@endsection
