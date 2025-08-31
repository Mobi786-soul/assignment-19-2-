<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Course;

class StudentCourseSeeder extends Seeder
{
    public function run()
    {
       
        $course1 = Course::create(['title' => 'Mathematics']);
        $course2 = Course::create(['title' => 'Physics']);
        $course3 = Course::create(['title' => 'Biology']);

        $student1 = Student::create(['name' => 'Faiza']);
        $student2 = Student::create(['name' => 'mobina']);
        $student3 = Student::create(['name' => 'Syed ']);

        $student1->courses()->attach([$course1->id, $course2->id]); 
        $student2->courses()->attach([$course2->id, $course3->id]);
        $student3->courses()->attach([$course3->id, $course3->id]); 
    }
}