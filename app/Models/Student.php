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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
