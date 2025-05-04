<nav class="bg-transparent absolute top-0 w-full">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <a href="{{ route('home') }}" @if (request()->routeIs('home')) class="active" @endif>
                <img src="{{ asset('images/elementary-school-logo.png') }}" alt="Logo Sekolah Dasar" class="h-12 lg:h-16"
                    loading="lazy">
            </a>
            <!-- Menu Navigasi untuk layar besar -->
            @php
                $menus = [
                    'home' => 'Home',
                    'profil' => 'Profil',
                    'guru' => 'Guru',
                    'siswa' => 'Siswa',
                    'galeri' => 'Galeri',
                    'contact' => 'Kontak',
                    'about' => 'Tentang Kami',
                ];
            @endphp

            <!-- Tombol Hamburger untuk mobile -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Menu untuk desktop -->
            <ul id="burger-menus" class="hidden md:flex space-x-6">
                @foreach ($menus as $route => $label)
                    <li>
                        <a href="{{ route($route) }}"
                            class="font-piazzolla font-black text-xs lg:text-sm {{ request()->routeIs($route) || request()->is($route . '*') ? 'text-white' : '' }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Sidebar untuk mobile -->
    <div id="mobile-menu" class="fixed inset-0 z-50 hidden overflow-hidden">
        <!-- Overlay -->
        <div id="overlay" class="absolute inset-0 transition-opacity duration-300">
        </div>

        <!-- Sidebar Content -->
        <div id="sidebar"
            class="absolute right-0 top-0 h-full w-60 bg-white/30 backdrop-blur-xs transform translate-x-full transition-all duration-300 ease-out shadow-2xl">
            <div class="flex justify-end p-5">
                <button id="menu-close" class="text-black transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col px-5 space-y-2">
                @foreach ($menus as $route => $label)
                    <li>
                        <a href="{{ route($route) }}"
                            class="block py-3 px-4 text-sm transition-all duration-200
                        {{ request()->routeIs($route) || request()->is($route . '*')
                            ? 'text-white font-bold'
                            : 'text-black font-bold hover:text-white' }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
