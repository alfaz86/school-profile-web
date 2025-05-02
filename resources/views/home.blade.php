@extends('layouts.app')
@section('content')
    <main class="py-4">
        <!-- Welcome Section -->
        <section class="bg-white pt-4 pb-8">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <!-- Decorative divider -->
                <div class="border-t-2 border-gray-300 my-4 py-4 text-center"></div>

                <div class="flex flex-col md:flex-row items-center gap-8 xl:gap-12">
                    <!-- Image -->
                    <div class="w-full lg:w-1/2 xl:w-5/12">
                        <img alt="School principal giving a speech" class="w-full h-auto rounded-lg shadow-md"
                            src="{{ asset('images/headmaster.png') }}" loading="lazy" />
                    </div>

                    <!-- Content -->
                    <div class="w-full lg:w-1/2 xl:w-7/12">
                        <h2 class="text-2xl lg:text-4xl font-bold text-gray-800 mb-4 sm:mb-6 leading-tight">
                            Sambutan Kepala Sekolah<br>
                            <span>SD Negeri Bojongloa 1</span>
                        </h2>

                        <div class="prose prose-sm sm:prose-base lg:prose-lg max-w-none text-gray-600 text-sm lg:text-base">
                            <p class="mb-4 sm:mb-5 font-semibold text-gray-700">
                                Assalamualaikum Wr. Wb
                            </p>

                            <p class="text-indent-8 text-justify mb-2 text-sm lg:text-base">
                                Puji syukur kita panjatkan ke hadirat Allah SWT atas berkat dan limpahan rahmat, taufik,
                                serta
                                hidayah-Nya kepada kita semua. Shalawat serta salam terucap kepada junjungan Nabi
                                Muhammad SAW.
                            </p>

                            <p class="text-indent-8 text-justify mb-2 text-sm lg:text-base">
                                Alhamdulillah, pada hari ini kita dapat menjalani aktivitas dengan keadaan sehat jasmani
                                dan rohani;
                                saya selaku kepala sekolah, mewakili seluruh warga SD Negeri Bojongloa 1 mengucapkan
                                selamat datang
                                di website seputar sekolah ini. Di website ini kami memperkenalkan guru, siswa serta
                                lingkungan
                                sekolah dan memperkenalkan visi misi kami salah satunya adalah membantu siswa baru
                                beradaptasi dengan
                                lingkungan sekolah dan sekitarnya, antara lain terhadap aspek keamanan, kebersihan dan
                                fasilitas
                                lain yang dapat dimanfaatkan siswa dan siswi dan menunjang kegiatan belajar mengajar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Profile Section -->
        <section class="bg-gray-100 py-8 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-7xl">
                <div class="flex flex-col md:flex-row items-center gap-6 xl:gap-8">
                    <!-- Profile Info -->
                    <div class="w-full lg:w-1/2 xl:w-2/5">
                        <h2 class="text-2xl lg:text-3xl font-bold mb-4 text-gray-800 leading-tight">
                            Profil Sekolah
                        </h2>
                        <div class="mb-6 text-gray-600 text-sm lg:text-base">
                            <p class="mb-4">Disamping ada profil kami dari alamat,</p>
                            <p class="mb-4">akreditasi, tanah kepemilikan jumlah siswa dan guru.</p>
                        </div>
                        <a href="{{ route('profil') }}"
                            class="px-6 py-3 bg-blue-500 text-white font-bold rounded-lg inline-flex items-center hover:bg-blue-600 transition-colors duration-300 text-sm">
                            Lebih Lanjut
                        </a>
                    </div>

                    <!-- Feature Cards -->
                    <div class="w-full lg:w-1/2 xl:w-3/5 mt-6 lg:mt-0">
                        <div class="grid sm:grid-cols-2 gap-4 md:gap-6">
                            <!-- Prestasi Card -->
                            <a href="{{ route('prestasi') }}"
                                class="group transform hover:-translate-y-1 transition-transform duration-300">
                                <div
                                    class="bg-white p-5 sm:p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 h-full border border-gray-100">
                                    <div class="bg-white rounded-full p-3 inline-flex mb-4">
                                        <img src="{{ asset('images/icons/Group 33.png') }}" alt="Icon Prestasi"
                                            class="w-7 h-7 sm:w-8 sm:h-8">
                                    </div>
                                    <h3 class="font-bold mb-2 text-lg text-gray-800 group-hover:text-blue-400">
                                        Prestasi
                                    </h3>
                                    <p class="text-gray-500 text-sm lg:text-base">
                                        Kumpulan prestasi siswa dan sekolah kami
                                    </p>
                                </div>
                            </a>

                            <!-- Lokasi Card -->
                            <a href="{{ route('contact') }}#gmaps"
                                class="group transform hover:-translate-y-1 transition-transform duration-300">
                                <div
                                    class="bg-white p-5 sm:p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 h-full border border-gray-100">
                                    <div class="bg-white rounded-full p-3 inline-flex mb-4">
                                        <img src="{{ asset('images/icons/Group 31.png') }}" alt="Icon Lokasi"
                                            class="w-7 h-7 sm:w-8 sm:h-8">
                                    </div>
                                    <h3 class="font-bold mb-2 text-lg text-gray-800 group-hover:text-blue-400">
                                        Lokasi
                                    </h3>
                                    <p class="text-gray-500 text-sm lg:text-base">
                                        Temukan lokasi sekolah kami dengan mudah
                                    </p>
                                </div>
                            </a>

                            <!-- Sejarah Card -->
                            <a href="{{ route('about') }}"
                                class="group transform hover:-translate-y-1 transition-transform duration-300 sm:col-span-1">
                                <div
                                    class="bg-white p-5 sm:p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 h-full border border-gray-100">
                                    <div class="bg-white rounded-full p-3 inline-flex mb-4">
                                        <img src="{{ asset('images/icons/Group 32.png') }}" alt="Icon Sejarah"
                                            class="w-7 h-7 sm:w-8 sm:h-8">
                                    </div>
                                    <h3 class="font-bold mb-2 text-lg text-gray-800 group-hover:text-blue-400">
                                        Sejarah
                                    </h3>
                                    <p class="text-gray-500 text-sm lg:text-base">
                                        Jejak sejarah desa dan SD Bojongloa
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Section -->
        <section class="py-8 px-4 md:px-8">
            <div class="container mx-auto">
                <h2 class="text-2xl lg:text-3xl font-bold mb-4">Gallery</h2>
                @php
                    $galleryImages = \App\Models\Gallery::latest()->take(6)->get();
                @endphp
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8 place-items-center">
                    @foreach ($galleryImages as $item)
                        <img alt="Pramuka" class="w-full aspect-square rounded-md mx-3"
                        src="data:image/png;base64,{{ base64_encode($item->images->first()->file_data) }}" />
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('galeri') }}"
                        class="px-6 py-2 bg-blue-500 text-white font-bold rounded-md hover:bg-blue-600 text-sm md:text-base">
                        Lebih Lanjut
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
