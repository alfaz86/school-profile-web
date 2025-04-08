@extends('layouts.app')
@section('content')
    <!-- Main Content Section -->
    <main class="p-5 md:p-10 my-4 md:my-0">
        <!-- Visi Section -->
        <section class="max-w-4xl mx-auto bg-white shadow-md rounded-lg mb-6 sm:mb-8 overflow-hidden">
            <h2 class="text-xl md:text-2xl font-bold text-center bg-color-card text-white py-3 px-4">
                Visi
            </h2>
            <div class="p-5 sm:p-6 md:p-7">
                <p class="text-gray-700 text-base sm:text-lg text-center leading-relaxed">
                    "Membentuk pembelajar yang akhlakul karimah, berilmu, beretika, berwawasan lingkungan untuk menuju
                    pentas dunia."
                </p>
            </div>
        </section>

        <!-- Misi Section -->
        <section class="max-w-4xl mx-auto bg-white shadow-md rounded-lg mb-6 sm:mb-8 overflow-hidden">
            <h2 class="text-xl md:text-2xl font-bold text-center bg-color-card text-white py-3 px-4">
                Misi
            </h2>
            <div class="p-5 sm:p-6 md:p-7">
                <ul class="text-gray-700 space-y-3">
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">•</span>
                        <span class="text-base sm:text-lg leading-relaxed">Mewujudkan pendidikan dengan keteladanan</span>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">•</span>
                        <span class="text-base sm:text-lg leading-relaxed">Mengembangkan budaya belajar dengan didasari pada
                            kecintaan terhadap ilmu pengetahuan</span>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">•</span>
                        <span class="text-base sm:text-lg leading-relaxed">Meningkatkan fasilitas sekolah menuju sekolah
                            bersih, sehat dan berwawasan lingkungan</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Kode Etik Section -->
        <section class="max-w-4xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <h2 class="text-xl md:text-2xl font-bold text-center bg-color-card text-white py-3 px-4">
                Kode Etik
            </h2>
            <div class="p-5 sm:p-6 md:p-7">
                <ol class="text-gray-700 space-y-3">
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">1</span>
                        <span class="text-base sm:text-lg leading-relaxed">Melaksanakan program untuk mewujudkan visi dan
                            misi kedalam kegiatan</span>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">2</span>
                        <span class="text-base sm:text-lg leading-relaxed">Menciptakan iklim yang kondusif untuk menumbuh
                            kembangkan semangat belajar siswa</span>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">3</span>
                        <span class="text-base sm:text-lg leading-relaxed">Menciptakan lingkungan yang aman, nyaman tertib
                            serta ditunjang optimisme dan harapan warga sekolah</span>
                    </li>
                    <li class="flex items-start">
                        <span
                            class="rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">4</span>
                        <span class="text-base sm:text-lg leading-relaxed">Menjalin komunikasi yang intensif dengan
                            orangtua, masyarakat dalam mengembangkan perencanaan, pelaksanaan dan evaluasi program
                            sekolah</span>
                    </li>
                </ol>
            </div>
        </section>
    </main>
@endsection
