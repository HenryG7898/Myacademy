<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quilifaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'quilification_id';

    protected $fillable = [
        'Subject',
        'Exam_body',
        'Award_type',
        'Grade',
        'Year',
        'student_id',
    ];
}
