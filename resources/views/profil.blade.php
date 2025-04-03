@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
    <main class="p-8 px-10">
        <!-- Judul -->
        <div class="border-t-2 border-gray-300 my-4 py-4 text-center"></div>
        <h1 class="text-center text-2xl font-bold mb-8">SD Negeri Bojongloa 1</h1>

        <!-- Card Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Card 1 -->
            <div class="bg-color-card text-white p-6 rounded-lg text-center">
                <div class="bg-white rounded-full p-2 md:p-3 inline-block mb-4">
                    <img src="{{ asset('images/icons/Group 194.png') }}" alt="Icon Sekolah" class="w-7 h-7 md:w-10 md:h-10">
                </div>
                <p class="font-bold text-sm lg:text-base">Nama Sekolah</p>
                <p class="mb-4 text-sm lg:text-base">SD Negeri Bojongloa 1</p>
                <p class="font-bold text-sm lg:text-base">Nama Kepala Sekolah</p>
                <p class="text-sm lg:text-base">Asep Suryana, S.Pd.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-color-card text-white p-6 rounded-lg text-center">
                <div class="bg-white rounded-full p-2 md:p-3 inline-block mb-4">
                    <img src="{{ asset('images/icons/Group 198.png') }}" alt="Icon Tanah" class="w-7 h-7 md:w-10 md:h-10">
                </div>
                <p class="font-bold text-sm lg:text-base">Status Kepemilikan Tanah</p>
                <p class="mb-2 text-sm lg:text-base">Pemerintah Daerah</p>
                <p class="font-bold text-sm lg:text-base">Luas Tanah</p>
                <p class="mb-2 text-sm lg:text-base">1,052 M<sup>2</sup></p>
                <p class="font-bold text-sm lg:text-base">Status Kepemilikan Bangunan</p>
                <p class="text-sm lg:text-base">Pemerintah</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-color-card text-white p-6 rounded-lg text-center">
                <div class="bg-white rounded-full p-2 md:p-3 inline-block mb-4">
                    <img src="{{ asset('images/icons/Group 1980.png') }}" alt="Icon Akreditasi"
                        class="w-7 h-7 md:w-10 md:h-10">
                </div>
                <p class="font-bold text-sm lg:text-base">Jenjang Akreditasi</p>
                <p class="mb-2 text-sm lg:text-base">B</p>
                <p class="font-bold text-sm lg:text-base">Tahun Didirikan</p>
                <p class="mb-2 text-sm lg:text-base">1956</p>
                <p class="font-bold text-sm lg:text-base">Tahun Operasional</p>
                <p class="text-sm lg:text-base">1960</p>
            </div>
        </div>

        <!-- Email & Alamat Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Email Card -->
            <div class="bg-color-card text-white p-6 rounded-lg text-center">
                <div class="bg-white rounded-full p-2 md:p-3 inline-block mb-4">
                    <img src="{{ asset('images/icons/Group 1940.png') }}" alt="Icon Email" class="w-7 h-7 md:w-10 md:h-10">
                </div>
                <p class="font-bold text-sm lg:text-base">Email</p>
                <p class="mb-2 text-sm lg:text-base">bojongloa1sdn1@gmail.com</p>
                <p class="font-bold text-sm lg:text-base">No. Telp</p>
                <p class="font-bold text-sm lg:text-base">08234678910112</p>
            </div>

            <!-- Alamat Card -->
            <div class="bg-color-card text-white p-6 rounded-lg text-center">
                <div class="bg-white rounded-full p-2 md:p-3 inline-block mb-4">
                    <img src="{{ asset('images/icons/Group 110.png') }}" alt="Icon Alamat" class="w-7 h-7 md:w-10 md:h-10">
                </div>
                <p class="font-bold text-sm lg:text-base">Alamat</p>
                <p class="text-sm lg:text-base">Dusun Citaman RT/RW D15/007, Desa Bojongloa, Kec Buahdua, Kabupaten Sumedang
                    </pc>
            </div>
        </div>

        <!-- Jumlah Siswa Section -->
        <section class="mb-4">
            <h2 class="text-base md:text-xl font-bold mb-4">Jumlah Siswa</h2>
            <!-- Table for Kelas 1-3 -->
            <div class="overflow-x-auto rounded-md">
                <table class="w-full border-collapse mb-8 overflow-hidden rounded-md">
                    <thead>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th colspan="9" class="border p-2">Tahun 2024</th>
                        </tr>
                        <tr class="bg-white text-black text-xs md:text-sm lg:text-base">
                            <th colspan="2" class="border p-2">Kelas 1</th>
                            <th class="border p-2">Jumlah Siswa</th>
                            <th colspan="2" class="border p-2">Kelas 2</th>
                            <th class="border p-2">Jumlah Siswa</th>
                            <th colspan="2" class="border p-2">Kelas 3</th>
                            <th class="border p-2">Jumlah Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                        </tr>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">6</td>
                            <td class="border p-2">9</td>
                            <td class="border p-2">15</td>
                            <td class="border p-2">12</td>
                            <td class="border p-2">11</td>
                            <td class="border p-2">23</td>
                            <td class="border p-2">10</td>
                            <td class="border p-2">5</td>
                            <td class="border p-2">15</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table for Kelas 4-6 -->
            <div class="">
                <table class="w-full border-collapse mb-8 overflow-hidden rounded-md">
                    <thead>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th colspan="9" class="border p-2">Tahun 2024</th>
                        </tr>
                        <tr class="bg-white text-black text-xs md:text-sm lg:text-base">
                            <th colspan="2" class="border p-2">Kelas 4</th>
                            <th class="border p-2">Jumlah Siswa</th>
                            <th colspan="2" class="border p-2">Kelas 5</th>
                            <th class="border p-2">Jumlah Siswa</th>
                            <th colspan="2" class="border p-2">Kelas 6</th>
                            <th class="border p-2">Jumlah Siswa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                            <td class="border p-2">L</td>
                            <td class="border p-2">P</td>
                            <td class="border p-2"></td>
                        </tr>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">8</td>
                            <td class="border p-2">11</td>
                            <td class="border p-2">19</td>
                            <td class="border p-2">12</td>
                            <td class="border p-2">14</td>
                            <td class="border p-2">26</td>
                            <td class="border p-2">9</td>
                            <td class="border p-2">11</td>
                            <td class="border p-2">20</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Data Ruang Kelas Section -->
        <section class="mb-4">
            <h2 class="text-base md:text-xl font-bold mb-4">Data Ruang Kelas</h2>
            <div class="overflow-x-auto rounded-md">
                <table class="w-full border-collapse mb-8 overflow-hidden rounded-md">
                    <thead>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th rowspan="2" class="border p-2">No</th>
                            <th rowspan="2" class="border p-2">Jenis Ruangan</th>
                            <th rowspan="2" class="border p-2">Jumlah Ruangan</th>
                            <th rowspan="2" class="border p-2">Jumlah Baik</th>
                            <th rowspan="2" class="border p-2">Jumlah Rusak</th>
                            <th colspan="2" class="border p-2">Kategori Kerusakan</th>
                        </tr>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th class="border p-2">Berat</th>
                            <th class="border p-2">Sedang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">1</td>
                            <td class="border p-2">Ruang Kelas</td>
                            <td class="border p-2">6</td>
                            <td class="border p-2">6</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                        </tr>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">2</td>
                            <td class="border p-2">Ruang Guru</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                        </tr>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">3</td>
                            <td class="border p-2">Ruang Lab</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                        </tr>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">4</td>
                            <td class="border p-2">Perpustakaan</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Data Tenaga Pendidik dan Kependidikan Section -->
        <section class="mb-4">
            <h2 class="text-base md:text-xl font-bold mb-4">Data Tenaga Pendidik dan Kependidikan</h2>
            <div class="overflow-x-auto rounded-md">
                <table class="w-full border-collapse mb-8 overflow-hidden rounded-md">
                    <thead>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th class="border p-2">No.</th>
                            <th class="border p-2">Jumlah Guru / Staff</th>
                            <th class="border p-2">SD Negeri Bojongloa 1</th>
                            <th class="border p-2" style="white-space: nowrap">S-1</th>
                            <th class="border p-2" style="white-space: nowrap">S-2</th>
                            <th class="border p-2">Sedang Menempuh S-1</th>
                            <th class="border p-2">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">1</td>
                            <td class="border p-2">Guru PNS</td>
                            <td class="border p-2">6</td>
                            <td class="border p-2">5</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">1 Lulusan D3</td>
                        </tr>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">2</td>
                            <td class="border p-2">Guru Non PNS</td>
                            <td class="border p-2">4</td>
                            <td class="border p-2">4</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2"></td>
                        </tr>
                        <tr class="bg-white text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">3</td>
                            <td class="border p-2">Operator</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2"></td>
                        </tr>
                        <tr class="bg-blue-100 text-center text-xs md:text-sm lg:text-base">
                            <td class="border p-2">4</td>
                            <td class="border p-2">Penjaga</td>
                            <td class="border p-2">1</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2">0</td>
                            <td class="border p-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <!-- Tombol Visi Misi -->
        <div class="text-start mb-4">
            <a href="{{ route('visi-misi') }}"
                class="bg-blue-500 text-white px-16 py-2 rounded-lg font-bold text-base md:text-lg">
                Visi Misi
            </a>
        </div>
    </main>
@endsection
