<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.test',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        $this->call([
            StudentSeeder::class,
            TeacherSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
