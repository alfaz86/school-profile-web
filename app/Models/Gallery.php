<?php
namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Gallery extends Model
{

    protected $fillable = [
        'title',
        'headline',
        'slug',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            if (empty($gallery->slug)) {
                $gallery->slug = Str::slug($gallery->title) . '-' . Str::random(6);
            }
        });

        // Event saat model Gallery akan dihapus
        static::deleting(function ($gallery) {
            // Pastikan relasi images dimuat
            $gallery->load('images');

            // Hapus semua gambar terkait
            foreach ($gallery->images as $image) {
                // Hapus file fisik dari storage
                if ($image->file_path && Storage::disk('public')->exists($image->file_path)) {
                    Storage::disk('public')->delete($image->file_path);
                }

                // Hapus record gambar dari database
                $image->delete();
            }
        });
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
