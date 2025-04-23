<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
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
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
