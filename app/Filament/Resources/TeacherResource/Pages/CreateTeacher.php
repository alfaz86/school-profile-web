<?php
namespace App\Filament\Resources\TeacherResource\Pages;

use App\Filament\Resources\TeacherResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateTeacher extends CreateRecord
{
    protected static string $resource = TeacherResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ambil data dari form
        $user = User::create([
            'name'     => $data['name'],                                                    // Ambil nama dari form
            'email'    => Str::slug($data['name']) . '-' . Str::random(5) . '@example.com', // Buat email unik
            'password' => bcrypt('password'),                                               // Password di-hash
            'role'     => 'teacher',                                                        // Set role ke student
        ]);

        $data['user_id'] = $user->id; // Simpan ID user ke dalam data siswa

        return $data; // Kembalikan data yang sudah dimodifikasi
    }
}
