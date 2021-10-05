<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $primaryKey = 'exper_id';

    protected $fillable = [
        'Company_nm',
        'Position',
        'Start_date',
        'End_date',
    ];


}
