<?php
namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Ambil data dari form
        $user = User::create([
            'name'     => $data['name'],                                                    // Ambil nama dari form
            'email'    => Str::slug($data['name']) . '-' . Str::random(5) . '@example.com', // Buat email unik
            'password' => bcrypt('password'),                                               // Password di-hash
            'role'     => 'student',                                                        // Set role ke student
        ]);

        $data['user_id'] = $user->id; // Simpan ID user ke dalam data siswa

        return $data; // Kembalikan data yang sudah dimodifikasi
    }
}
