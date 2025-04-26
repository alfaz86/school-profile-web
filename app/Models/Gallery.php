<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

        static::deleting(function ($gallery) {
            if ($gallery->images) {
                foreach ($gallery->images as $image) {
                    // Hapus file dari storage
                    Storage::disk('public')->delete($image->file_path);
                    // Hapus record gambar dari DB
                    $image->delete();
                }
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
