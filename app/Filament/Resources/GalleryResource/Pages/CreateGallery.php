<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Models\Image;
use Filament\Actions;
use App\Models\Teacher;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function beforeCreate(): void
    {
        $this->data['slug'] = Str::slug($this->data['title']) . '-' . Str::random(6);
    }

    protected function afterCreate(): void
    {
        // Save image after teacher is created
        $imageData = session('image_data');

        if ($imageData) {
            $image                 = new Image();
            $image->file_data      = $imageData['file_data'];
            $image->file_name      = $imageData['file_name'];
            $image->file_path      = $imageData['file_path'];
            $image->imageable_id   = $this->record->id;
            $image->imageable_type = Gallery::class;
            $image->save();

            // Clear session data
            session()->forget('image_data');
        }
    }

}
