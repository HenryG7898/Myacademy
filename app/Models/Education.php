<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $primaryKey = 'educat_id';

    protected $fillable = [
        'School_nm',
        'School_type',
        'Start_year',
        'End_year',
    ];
}
