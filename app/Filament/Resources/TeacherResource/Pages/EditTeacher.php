<?php
namespace App\Filament\Resources\TeacherResource\Pages;

use App\Filament\Resources\TeacherResource;
use App\Models\Image;
use App\Models\Teacher;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacher extends EditRecord
{
    protected static string $resource = TeacherResource::class;

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
                ->where('imageable_type', Teacher::class)
                ->first();

            if (! $image) {
                $image                 = new Image();
                $image->imageable_id   = $this->record->id;
                $image->imageable_type = Teacher::class;
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
