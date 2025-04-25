<?php
namespace App\Models;

use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($teacher) {
            // Delete the associated user when the teacher is deleted
            if ($teacher->user) {
                $teacher->user->delete();
            }
        });

        static::deleting(function ($teacher) {
            if ($teacher->image) {
                // Hapus file dari storage
                Storage::disk('public')->delete($teacher->image->file_path);
                // Hapus record gambar dari DB
                $teacher->image->delete();
            }
        });

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
