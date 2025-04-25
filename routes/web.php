<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil', ['title' => 'Profile SD Negeri Bojongloa 1']);
})->name('profil');

Route::get('/guru', function () {
    return view('guru', ['title' => 'Data Guru']);
})->name('guru');

// Route::get('/siswa', function () {
//     return view('siswa', ['title' => 'Data Siswa']);
// })->name('siswa');

Route::get('/siswa', [StudentController::class, 'index'])->name('siswa');

Route::get('/galeri', function () {
    return view('galeri', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('galeri');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Kontak Kami']);
})->name('contact');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
})->name('about');

// Partial Route
Route::get('/profil/visi-misi', function () {
    return view('partials.visi-misi', ['title' => 'Visi dan Misi SD Negeri Bojongloa 1']);
})->name('visi-misi');

Route::get('/profil/prestasi', function () {
    return view('partials.prestasi', ['title' => 'Prestasi Siswa']);
})->name('prestasi');

// Partial Galeri Route
Route::get('/galeri/shalat-dhuha', function () {
    return view('partials.shalat', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('shalat-dhuha');

Route::get('/galeri/upacara', function () {
    return view('partials.upacara', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('upacara');

Route::get('/galeri/komunitas-belajar', function () {
    return view('partials.komunitas-belajar', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('komunitas-belajar');

Route::get('/galeri/anbk', function () {
    return view('partials.anbk', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('anbk');

Route::get('/galeri/pramuka', function () {
    return view('partials.pramuka', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('pramuka');

Route::get('/galeri/pembelajaran', function () {
    return view('partials.pembelajaran', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('pembelajaran');

Route::get('/galeri/program', function () {
    return view('partials.program', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('program');

Route::get('/galeri/senam', function () {
    return view('partials.senam', ['title' => 'Galeri SD Negeri Bojongloa 1']);
})->name('senam');
