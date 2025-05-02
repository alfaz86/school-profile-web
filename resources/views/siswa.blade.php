@extends('layouts.app')

@section('content')
<div class="p-5 lg:p-10">
    <section>
        <div class="overflow-x-auto rounded-md">
            <table id="students-table" class="w-full text-sm border border-gray-200">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="border" style="padding: 20px">No</th>
                        <th class="border" style="padding: 20px">Nama Siswa</th>
                        <th class="border" style="padding: 20px">NIS</th>
                        <th class="border" style="padding: 20px">Jenis Kelamin</th>
                        <th class="border" style="padding: 20px">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                    <tr style="background-color: {{ $index % 2 !== 0 ? '#f0f4ff' : '#ffffff' }};">
                            <td class="border text-center" style="padding: 20px">{{ $index + 1 }}</td>
                            <td class="border" style="padding: 20px">{{ $student->name }}</td>
                            <td class="border" style="padding: 20px">{{ $student->nis }}</td>
                            <td class="border text-center" style="padding: 20px">
                                {{ $student->gender === 'male' ? 'Laki-laki' : 'Perempuan' }}
                            </td>
                            <td class="border text-center" style="padding: 20px">{{ $student->class }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#students-table').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Tidak ada data ditemukan",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Tidak ada data tersedia",
                    paginate: {
                        first: "Pertama",
                        last: "Terakhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endpush
