@extends('layouts.app')

@section('content')
    <div class="p-5 lg:p-10">
        <!-- Title and Divider -->
        <div class="border-t-2 border-gray-300 my-4 pt-4 text-center">
        </div>

        <!-- Data Ruang Kelas Section -->
        <section class="mb-0">
            <div class="overflow-hidden rounded-md pb-0 mb-0">
                <table class="w-full border-collapse border-spacing-0 mb-0 rounded-md">
                    <thead>
                        <tr class="bg-blue-500 text-white text-xs md:text-sm lg:text-base">
                            <th rowspan="2" class="border p-2">No</th>
                            <th rowspan="2" class="border p-2">Nama Siswa</th>
                            <th rowspan="2" class="border p-2">NIS</th>
                            <th rowspan="2" class="border p-2">Jenis Kelamin</th>
                            <th rowspan="2" class="border p-2">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $index => $student)
                            <tr
                                class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-blue-100' }} text-center text-xs md:text-sm lg:text-base">
                                <td class="border p-2">{{ $index + 1 }}</td>
                                <td class="border p-2">{{ $student->name }}</td>
                                <td class="border p-2">{{ $student->nis }}</td>
                                <td class="border p-2">
                                    {{ $student->gender == 'male' ? 'Laki-laki' : 'Perempuan' }}
                                </td>
                                <td class="border p-2">{{ $student->class }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </div>
@endsection
