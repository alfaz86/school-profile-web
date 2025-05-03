<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/profil', function () {
    return view('profil', ['title' => 'Profile SD Negeri Bojongloa 1']);
})->name('profil');

Route::get('/guru', [TeacherController::class, 'index'])->name('guru');

Route::get('/siswa', [StudentController::class, 'index'])->name('siswa');

Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::get('/galeri/{gallery:slug}', [GalleryController::class, 'show'])->name('gallery.show');

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

Route::get('/image/{id}', [ImageController::class, 'streamImage'])
    ->name('image.stream');