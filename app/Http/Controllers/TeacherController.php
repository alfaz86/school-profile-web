<?php
namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('image')->get();

        // dd($teachers);

        return view('guru', [
            'title'    => 'Data Guru',
            'teachers' => $teachers,
        ]);
    }
}
