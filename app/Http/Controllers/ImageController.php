<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImageController extends Controller
{
    public function streamImage($id)
    {
        $image = Image::findOrFail($id);
        $mime = finfo_buffer(finfo_open(), $image->file_data, FILEINFO_MIME_TYPE);

        return response($image->file_data)
            ->header('Content-Type', $mime)
            ->header('Cache-Control', 'max-age=31536000, public');
    }
}
