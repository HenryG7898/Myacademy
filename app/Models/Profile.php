<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'profile_id';

    protected $fillable = [
        'Profile',
        'student_id',
    ];

    public function user(){
        $this->belongsTo(User::class,'student_id', 'student_id');
    }
}
