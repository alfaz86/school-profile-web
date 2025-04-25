<?php
namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        // dd($students);
        return view('siswa', [
            'title'    => 'Data Siswa',
            'students' => $students,
        ]);
    }

}
