<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri Bojongloa 1</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,opsz,wght@0,8..30,100..900;1,8..30,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- my-css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- jQuery & DataTables CDN -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

</head>

<body>
    <div class="relative">
        <img alt="School building with a flagpole and trees in the background" class="w-full h-96 object-cover"
            height="500" src="{{ asset('images/hero-image.jpeg') }}" />
        <div>
            @if (!request()->routeIs('home'))
                <div class="absolute inset-0 flex items-center justify-center">
                    <h1 class="text-white text-xl md:text-3xl lg:text-4xl font-bold">
                        {{ $title }}
                    </h1>
                </div>
            @else
                <div class="absolute inset-0 content-center mx-12 text-white">
                    <h1 class="text-base md:text-lg lg:text-2xl font-bold">
                        MOTTO
                    </h1>
                    <h2 class="text-lg md:text-xl lg:text-3xl mt-2 font-bold font-piazzolla">
                        SD Negeri Bojongloa 1
                    </h2>
                    <p class="text-lg md:text-xl lg:text-3xl mt-2 font-bold font-piazzolla">
                        Ilmu adalah cahaya yang menerangi
                    </p>
                    <p class="text-lg md:text-xl lg:text-3xl mt-2 font-bold font-piazzolla">
                        perjalananmu menuju masa depan
                    </p>
                    <button onclick="window.location.href='{{ route('contact') }}'"
                        class="mt-4 px-8 md:px-12 py-2 font-bold bg-blue-500 hover:bg-blue-300 transition-colors text-xs lg:text-sm text-white rounded">
                        Contact
                    </button>
                </div>
            @endif
        </div>
    </div>
    @include('components.navbar')
    @yield('content')
    <div class="relative p-8 bg-gray-100">
        @include('components.footer')
    </div>

    <!-- jQuery & DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    <script src="{{ asset('js/scripts.js') }}"></script>
    @stack('scripts')
</body>

</html>
