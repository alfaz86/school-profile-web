@extends('layouts.app')
@section('content')
    <main class="py-4">
        <!-- Welcome Section -->
        <section class="bg-white px-4 py-8 max-w-screen-xl mx-auto">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
                <!-- Decorative divider -->
                <div class="border-t-2 border-gray-300 my-4 py-4 text-center"></div>
                <div class="flex flex-col md:flex-row items-center gap-6 md:gap-10 lg:gap-16">
                    <!-- Image Section - Enhanced with better styling -->
                    <div class="md:w-1/2 xl:w-5/12 flex flex-col items-center">
                        <div class="relative w-full max-w-xs md:max-w-sm overflow-hidden rounded-xl shadow-lg bg-gray-100">
                            <img alt="Kepala Sekolah SD Negeri Bojongloa 1"
                                class="w-full h-auto object-cover transition-transform duration-300 hover:scale-105"
                                src="{{ asset('images/headmaster-1.jpg') }}" loading="lazy" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                        <div class="mt-4 text-center">
                            <p class="text-lg font-semibold text-gray-800">Asep Suryana, S.Pd</p>
                            <p class="text-sm text-gray-600">Kepala Sekolah</p>
                        </div>
                    </div>

                    <!-- Content Section -->
                    <div class="w-full md:w-1/2 lg:w-7/12 mt-6 md:mt-0">
                        <!-- Konten tetap sama -->
                        <div class="mb-6">
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-800 leading-tight">
                                Sambutan Kepala Sekolah
                            </h2>
                            <div class="w-16 h-1 bg-indigo-600 rounded-full mt-2"></div>
                            <p class="text-base sm:text-lg text-gray-600 mt-2">SD Negeri Bojongloa 1</p>
                        </div>

                        <div class="space-y-4 text-gray-700">
                            <p class="text-justify leading-relaxed text-sm sm:text-base indent text-indent-8">
                                Selamat datang di website SD Negeri Bojongloa 1 sebagai lembaga pendidikan, SD Negeri
                                Bojongloa 1 tanggap dengan perkembangan teknologi dan informasi. Sekolah ini siap untuk
                                berkompetisi dengan sekolah lain dalam pelayanan informasi publik. Teknologi Informasi
                                website khususnya, menjadi sarana bagi SD Negeri Bojongloa 1 untuk memberi pelayanan
                                informasi secara cepat dan jelas.
                            </p>

                            <p class="text-justify leading-relaxed text-sm sm:text-base indent text-indent-8">
                                Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat
                                menjawab kebutuhan masyarakat. Layanan informasi berbasis website sangatlah penting dalam
                                meningkatkan eksistensi SD Negeri Bojongloa 1 yang merupakan instansi pendidikan formal,
                                layanan web informasi ini nantinya akan menjadi wadah dalam menyebar luaskan
                                berbagai informasi.
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
                <h2 class="text-2xl lg:text-3xl font-bold mb-4">Galeri</h2>
                @php
                    $galleryImages = \App\Models\Gallery::latest()->take(6)->get();
                @endphp
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-8 place-items-center">
                    @foreach ($galleryImages as $item)
                        @php
                            $image = $item->images->first();
                            $imageUrl = $image
                                ? route('image.stream', [
                                    'id' => $image->id,
                                    'v' => $image->updated_at->timestamp,
                                ])
                                : asset('images/default-image.png');
                        @endphp

                        <img alt="{{ $item->title }}" class="w-full aspect-square rounded-md mx-3"
                            src="{{ $imageUrl }}" />
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
