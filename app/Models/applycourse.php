<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applycourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'Course',
        'Award',
        'Format',
        'Modality',
        'Status',
        'Start_date',
        'End_date',
    ];

    protected $primaryKey = 'course_id';

    public function selection(){
        return $this->hasMany(Selection::class,"course_id","select_id")->with("user");
    }
}
