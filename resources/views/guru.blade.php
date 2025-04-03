@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <main class="p-10">
        <div class="container mx-auto px-4">
            <div class="border-t-2 border-gray-300 my-4 py-4 text-center">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Asep Suryana, S.Pd." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/asep suryana pj anbk.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Asep Suryana, S.Pd.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Kepala Sekolah
                    </p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Eli Rohaeni, S.Pd.SD" class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/ELI ROHAENI.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Eli Rohaeni, S.Pd.SD
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 1
                    </p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Acep Ananda Nugraha, S.Pd." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/ACEP ANANDA NUGRAHA.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Acep Ananda Nugraha, S.Pd.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 2
                    </p>
                </div>
                <!-- Card 4 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Haris Kusmaya, S.Pd." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/HARIS KUSMAYA.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Haris Kusmaya, S.Pd.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 3
                    </p>
                </div>
                <!-- Card 5 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Dedi, S.Pd.I." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/DEDI.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Dedi, S.Pd.I.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 4/PAI
                    </p>
                </div>
                <!-- Card 6 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of A. Sana, S.Pd.SD." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/A.SANA.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        A. Sana, S.Pd.SD.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 5
                    </p>
                </div>
                <!-- Card 7 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Daningsih, S.Pd." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/DANINGSIH.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Daningsih, S.Pd.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Guru Kelas 6
                    </p>
                </div>
                <!-- Card 8 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Kurnia Sandi, S.K.M." class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/KURNIA SANDI.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Kurnia Sandi, S.K.M.
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Operator Sekolah
                    </p>
                </div>
                <!-- Card 9 -->
                <div class="bg-white shadow-lg rounded-lg p-4 text-center">
                    <img alt="Portrait of Asep Iman Ruhyana Supriatna" class="mx-auto mb-4" height="200"
                        src="{{ asset('images/guru/ASEP IMAN.png') }}" width="150" />
                    <h2 class="text-base font-normal font-open-sans">
                        Asep Iman Ruhyana Supriatna
                    </h2>
                    <p class="text-gray-600 font-bold text-xl font-open-sans">
                        Penjaga Sekolah
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
