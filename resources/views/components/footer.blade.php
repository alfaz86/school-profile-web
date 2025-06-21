<footer class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Top Section -->
        <div class="flex flex-col md:flex-row justify-between items-start mb-8 gap-8">
            <!-- Address and Logo -->
            <div class="flex-1">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/logo-cyrcle.png') }}" alt="Logo SDN Bojongloa 1"
                        class="h-12 md:h-14 lg:h-16 mr-4">
                    <h3 class="font-piazzolla text-base font-bold">SDN Bojongloa 1</h3>
                </div>
                <div class="text-sm lg:text-base text-gray-600 space-y-2">
                    <p class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Dusun Citaman RT/RW 015/007, Desa Bojongloa
                    </p>
                    <p class="flex items-center mr-2 ">
                        <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                        </svg>
                        Kec Buahdua, Kabupaten Sumedang, Jawa Barat
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="flex-1 w-full">
                <div class="border-b-2 border-gray-300 pb-2 mb-4 w-full">
                    <h2 class="font-bold text-lg inline-block">Halaman Umum</h2>
                </div>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('guru') }}"
                            class="flex items-center text-gray-600 hover:text-blue-600 transition-colors text-sm lg:text-base">
                            <svg class="w-3 h-3 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Data Guru
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('siswa') }}"
                            class="flex items-center text-gray-600 hover:text-blue-600 transition-colors text-sm lg:text-base">
                            <svg class="w-3 h-3 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Data Siswa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}#gmaps"
                            class="flex items-center text-gray-600 hover:text-blue-600 transition-colors text-sm lg:text-base">
                            <svg class="w-3 h-3 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Lokasi Sekolah
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}#contact"
                            class="flex items-center text-gray-600 hover:text-blue-600 transition-colors text-sm lg:text-base">
                            <svg class="w-3 h-3 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Kontak Kami
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="flex-1 w-full">
                <h2 class="font-bold mb-4 text-lg border-b-2 border-gray-300 pb-2 w-full">Media Sosial</h2>
                <p class="text-sm lg:text-base text-gray-600 mb-4">Ikuti kami di media sosial untuk informasi terbaru
                </p>
                <div class="flex space-x-3">
                    <a href="https://www.instagram.com/sdnbojongloa1_20233787"
                        class="bg-gradient-to-br from-purple-600 to-pink-600 p-2 rounded-lg text-white hover:opacity-90 transition-opacity">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-300 my-6"></div>

        <!-- Copyright -->
        <div class="text-center text-sm text-gray-600">
            <p>&copy; {{ date('Y') }} SDN Bojongloa 1.</p>
        </div>
    </div>
</footer>
