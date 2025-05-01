<?php
namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    //
    public function index()
    {
        $galleries = Gallery::with('images')->get();
        // dd($galleries);
        return view('galeri', [
            'title'     => 'Galeri SD Negeri Bojongloa 1',
            'galleries' => $galleries,
        ]);
    }

    public function show(Gallery $gallery)
    {
        // Relasi images sudah dimuat otomatis karena eager load bisa ditambahkan jika perlu
        $gallery->load('images');

        return view('layouts.galeri-detail', [
            'title'   => $gallery->title,
            'gallery' => $gallery->images,
        ]);
    }
}
