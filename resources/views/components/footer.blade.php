<footer class="py-8">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-start">
        <!-- Bagian Alamat dan Logo -->
        <div class="flex flex-col items-start mb-4 md:mb-0">
            <img src="{{ asset('images/Logo Sekolah Dasar (Logo SD).png') }}" alt="Logo Sekolah Dasar"
                class="h-12 md:h-14 lg:h-16">
            <div class="text-xs text-left font-piazzolla font-bold">
                <p>Dusun Citaman RT/RW 015/007, Desa Bojongloa,</p>
                <p>Kec Buahdua, Kabupaten Sumedang</p>
            </div>
        </div>

        <!-- Bagian Halaman Umum -->
        <div class="text-left mb-4 md:mb-0">
            <h2 class="font-open-sans font-bold mb-2 text-sm md:text-base">Halaman Umum</h2>
            <ul class="text-xs md:text-sm">
                <li><a href="{{ route('guru') }}" class="font-open-sans text-gray-800 font-bold text-xs lg:text-sm">Data
                        Guru</a>
                </li>
                <li><a href="{{ route('siswa') }}"
                        class="font-open-sans text-gray-800 font-bold text-xs lg:text-sm">Data Siswa</a>
                </li>
                <li><a href="{{ route('contact') }}#gmaps"
                        class="font-open-sans text-gray-800 font-bold text-xs lg:text-sm">Lokasi</a>
                </li>
                <li><a href="{{ route('contact') }}"
                        class="font-open-sans text-gray-800 font-bold text-xs lg:text-sm">Kontak</a>
                </li>
            </ul>
        </div>

        <!-- Bagian Media Sosial -->
        <div class="text-left">
            <h2 class="font-open-sans font-bold mb-2 text-sm md:text-base">Media Sosial</h2>
            <ul class="flex space-x-4">
                <li>
                    <a href="#">
                        <img src="{{ asset('images/icons/instagram_1400829.png') }}" alt="Instagram"
                            class="h-6 w-6 p-1 border-2 border-gray-400 rounded-md items-center justify-center">
                    </a>
                </li>
                <!-- Tambahkan ikon media sosial lainnya di sini -->
            </ul>
        </div>
    </div>

    <!-- Garis Pemisah -->
    <div class="border-t border-gray-300 mt-8 pt-4 text-center">
    </div>
</footer>
