<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selection extends Model
{
    use HasFactory;

    protected $primaryKey = 'select_id';
    protected $fillable = [
        'student_id',
        'course_id',
    ];

    public function user() {
        return $this->belongsTo(User::class,'student_id','student_id');
    }
    public function course() {
        return $this->belongsTo(applycourse::class,'course_id','course_id');
    }
}
