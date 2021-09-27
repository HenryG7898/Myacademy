<?php

namespace Database\Seeders;

use App\Models\applycourse;
use Illuminate\Database\Seeder;

class course extends Seeder
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
            'Modality' => 'Face to Face',
            'Status' => 'Available',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
            'Course' => 'Customer Service Level 2',
            'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Modality' => 'Face to Face',
            'Status' => 'Available',
            'Start_date' =>'2021-10-16',
            'End_date' =>'2021-12-16',
        ],
        [
            'Course' => 'Administrative Assistant Level 2',
            'Award' => 'NVQJ Certificate',
            'Format'=> 'part-time',
            'Modality' => 'Blended',
            'Status' => 'Available',
            'Start_date' =>'2022-01-5',
            'End_date' =>'2022-2-16',
        ],
        [
            'Course' => 'Customer Engagement Level 2',
            'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Modality' => 'Face to Face',
            'Status' => 'Available',
            'Start_date' =>'2021-09-16',
            'End_date' =>'2021-10-16',
        ],
        [
            'Course' => 'Software Programming Level 3',
            'Award' => 'Job Certificate',
            'Format'=> 'Full-time',
            'Modality' => 'Face to Face',
            'Status' => 'Available',
            'Start_date' =>'2021-10-16',
            'End_date' =>'2021-12-15',
        ],
        [
            'Course' => 'Air Condition & Refrigeration Level 2',
            'Award' => 'NVQJ Certificate',
            'Format'=> 'Part-time',
            'Modality' => 'Face to Face',
            'Status' => 'Available',
            'Start_date' =>'2021-10-16',
            'End_date' =>'2021-11-28',
        ],
    ];
    public function run()
    {
        foreach ($this->course as $course) {
            applycourse::create($course);
        }
    }
}
