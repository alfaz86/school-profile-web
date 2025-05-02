<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'no' => 1,
                'name' => 'AMELYA ARYANI RAMADHAN',
                'nis' => '111111',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 2,
                'name' => 'ARSYLA THALITA ZAHRAN',
                'nis' => '111112',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 3,
                'name' => 'CANDRA KHARISMA',
                'nis' => '111113',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 4,
                'name' => 'FAEYA ALDRIC ENDANG SAPUTRA',
                'nis' => '111114',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 5,
                'name' => 'IQBAL AZKA RAMADHAN',
                'nis' => '111115',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 6,
                'name' => 'KEYSHA ZAHRAN HANANYA',
                'nis' => '111116',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 7,
                'name' => 'LINTANG MUHAMMAD RIDWAN',
                'nis' => '111117',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 8,
                'name' => 'MUHAMAD AL ZHIQRI RAFAHTHAR',
                'nis' => '111118',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 9,
                'name' => 'NAFISHA QISTHI TIENDY',
                'nis' => '111119',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 10,
                'name' => 'SATYA WISNU HAMAD MARYANTO',
                'nis' => '1111110',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 11,
                'name' => 'SILVINA DEWIYAN ALIMAYHIRA',
                'nis' => '1111111',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 12,
                'name' => 'VANESSA PUTRY SALSABILA',
                'nis' => '1111112',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 13,
                'name' => 'ZAKIYA RAMADHANI',
                'nis' => '1111113',
                'gender' => 'male',
                'class' => '1',
            ],
            [
                'no' => 14,
                'name' => 'ZASMIN HERLIANI',
                'nis' => '1111114',
                'gender' => 'female',
                'class' => '1',
            ],
            [
                'no' => 15,
                'name' => 'ABIZAR AL KAHFI',
                'nis' => '1111115',
                'gender' => 'male',
                'class' => '1',
            ],
        ];

        foreach ($students as $student) {
            $user = User::create([
                'name'     => $student['name'],
                'email'    => Str::slug($student['name']) . '-' . Str::random(5) . '@example.com',
                'password' => bcrypt('password'),
                'role'     => 'student',
            ]);

            Student::create([
                'name'    => $student['name'],
                'nis'     => $student['nis'],
                'gender'  => $student['gender'],
                'class'   => $student['class'],
                'user_id' => $user->id,
            ]);
        };
    }
}
