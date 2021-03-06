<?php

namespace Database\Seeders;
use App\Models\applycourse;
use Illuminate\Database\Seeder;
//use App\Models\applycourse;
class applycourses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $course =[
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
          'Course' => 'Network Support Level 2',
           'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
    ];
    public function run()
    {
        foreach ($this->course as $course) {
           applycourse::create($course);
        }
    }
}
