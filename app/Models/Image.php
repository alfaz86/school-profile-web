<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_data',
        'file_name',
        'file_path',
        'imageable_id',
        'imageable_type',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($image) {
            if ($image->file_path && Storage::disk('public')->exists($image->file_path)) {
                Storage::disk('public')->delete($image->file_path);
            }
        });
    }

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

}
