@extends('layouts.app')
@section('content')
    <!-- Content Section -->
    <div class="p-12">
        <div class="mx-auto space-y-12 justify-items-center">
            <!-- First Item -->
            <div class="text-center relative">
                <img alt="Perlombaan FTBI" class="rounded-lg w-931px h-479px"
                    src="{{ asset('images/prestasi/IMG-20241019-WA0047.png') }}" width="800" />
                <div class="absolute bottom-0 left-0 right-0 text-white py-2 rounded-b-lg"
                    style="background-color: rgba(14, 165, 233, 0.75);">
                    <h2 class="text-lg lg:text-2xl font-semibold">
                        Perlombaan FTBI
                    </h2>
                </div>
            </div>
            <!-- Second Item -->
            <div class="text-center relative">
                <img alt="Pembagian hadiah maulid nabi muhammad SAW" class="rounded-lg w-931px h-479px"
                    src="{{ asset('images/prestasi/IMG-20241017-WA0117.png') }}" width="800" />
                <div class="absolute bottom-0 left-0 right-0 text-white py-2 rounded-b-lg"
                    style="background-color: rgba(14, 165, 233, 0.75);">
                    <h2 class="text-lg lg:text-2xl font-semibold">
                        Pembagian hadiah maulid nabi muhammad SAW
                    </h2>
                </div>
            </div>
            <!-- Third Item -->
            <div class="text-center relative">
                <img alt="Perlombaan Pramuka" class="rounded-lg w-931px h-479px"
                    src="{{ asset('images/prestasi/IMG-20241017-WA0113.png') }}" width="800" />
                <div class="absolute bottom-0 left-0 right-0 text-white py-2 rounded-b-lg"
                    style="background-color: rgba(14, 165, 233, 0.75);">
                    <h2 class="text-lg lg:text-2xl font-semibold">
                        Perlombaan Pramuka
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
