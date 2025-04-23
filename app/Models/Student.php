<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'nis',
        'gender',
        'class',
        'user_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($student) {
            // Delete the associated user when the student is deleted
            if ($student->user) {
                $student->user->delete();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
