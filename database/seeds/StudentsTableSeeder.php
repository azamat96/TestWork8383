<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Course;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Student::class, 20)->create();

        $courses = Course::pluck('id');
        $students = Student::pluck('id');

        foreach($students as $id) {
            $student = App\Student::find($id);
            $student->courses()->attach($courses[rand(0, count($courses)-1)], [
                'start_date' => Carbon::now()->format('Y-m-d'),
                'end_date' => Carbon::now()->addMonths(rand(1,6))->format('Y-m-d')
            ]);
        }
    }
}
