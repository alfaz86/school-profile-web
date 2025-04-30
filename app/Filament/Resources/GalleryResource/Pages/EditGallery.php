<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Models\Image;
use Filament\Actions;
use App\Models\Gallery;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\GalleryResource;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Update or create image
        $imageData = session('image_data');

        if ($imageData) {
            $image = Image::where('imageable_id', $this->record->id)
                ->where('imageable_type', Gallery::class)
                ->first();

            if (! $image) {
                $image                 = new Image();
                $image->imageable_id   = $this->record->id;
                $image->imageable_type = Gallery::class;
            }

            $image->file_data = $imageData['file_data'];
            $image->file_name = $imageData['file_name'];
            $image->file_path = $imageData['file_path'];
            $image->save();

            // Clear session data
            session()->forget('image_data');
        }
    }
}
