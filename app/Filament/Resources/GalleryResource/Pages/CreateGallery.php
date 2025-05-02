<?php
namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;
use App\Models\Image;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CreateGallery extends CreateRecord
{
    protected static string $resource = GalleryResource::class;

    protected function beforeCreate(): void
    {
        $this->data['slug'] = Str::slug($this->data['title']) . '-' . Str::random(6);
        // Hapus dd() agar eksekusi bisa lanjut ke afterCreate
        // dd($this->data['images'] ?? null);
    }

    protected function afterCreate(): void
    {
        $images = $this->data['images'] ?? [];

        foreach ($images as $entry) {
            $fileData = $entry['file_data'] ?? null;

            if (is_array($fileData)) {
                foreach ($fileData as $filename) {
                    $storagePath = $filename;

                    if (Storage::disk('public')->exists($storagePath)) {
                        $image                 = new Image();
                        $image->file_name      = $filename;
                        $image->file_data      = Storage::disk('public')->get($storagePath);
                        $image->file_path      = $filename;
                        $image->imageable_id   = $this->record->id;
                        $image->imageable_type = Gallery::class;
                        $image->save();
                    }
                }
            }
        }
    }

}
