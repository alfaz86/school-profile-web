<?php
namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use App\Models\Gallery;
use App\Models\Image;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditGallery extends EditRecord
{
    protected static string $resource = GalleryResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('edit', ['record' => $this->record->slug]);
    }

    protected function afterSave(): void
    {
        $data      = $this->form->getState();
        $newImages = $data['images'] ?? [];

        // Ambil ID image lama dari database
        $oldImageIds = Image::where('imageable_id', $this->record->id)
            ->where('imageable_type', Gallery::class)
            ->pluck('id')
            ->toArray();

        // Ambil ID dari form input
        $inputImageIds = collect($newImages)
            ->pluck('image_id')
            ->filter() // buang null (berarti gambar baru)
            ->toArray();

        // Dihapus = ID lama yang tidak ada di form
        $deletedImageIds = array_diff($oldImageIds, $inputImageIds);

        // Upload baru = item yang tidak punya image_id tapi punya file_data
        $newUploads = collect($newImages)
            ->filter(fn($item) => empty($item['image_id']) && ! empty($item['file_data']))
            ->values()
            ->toArray();

        // - Delete dari DB
        Image::whereIn('id', $deletedImageIds)->delete();
        // - Simpan image baru ke DB
        foreach ($newUploads as $upload) {
            Image::create([
                'imageable_id'   => $this->record->id,
                'imageable_type' => Gallery::class,
                'file_data'      => Storage::disk('public')->get($upload['file_data']),
                'file_name'      => $upload['file_data'],
                'file_path'      => $upload['file_data'],
            ]);
        }
    }

    protected function afterFill(): void
    {
        $this->form->fill([
            'title'       => $this->record->title,
            'headline'    => $this->record->headline,
            'description' => $this->record->description,
            'images'      => Image::where('imageable_id', $this->record->id)
                ->where('imageable_type', Gallery::class)
                ->get()
                ->map(fn($image) => [
                    'image_id'  => $image->id,
                    'file_data' => $image->file_data,
                    'file_name' => $image->file_name,
                ])
                ->toArray(),
        ]);
    }

}
