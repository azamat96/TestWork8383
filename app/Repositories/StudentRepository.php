<?php

namespace App\Repositories;

use App\Student;
use App\User;
use App\Repositories\Interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function search($params = [])
    {
        $students = Student::with('courses');

        if (isset($params['name'])) {
            $students->where('name', 'like', '%'.$params['name'].'%');
        }
        if (isset($params['phone'])) {
            $students->where('phone', 'like', '%'.$params['phone'].'%');
        }
        if (isset($params['birth_date'])) {
            $students->where('birth_date', '=', $params['birth_date']);
        }
        if (isset($params['course_id']) || isset($params['start_date']) || isset($params['end_date'])) {
            $students->whereHas('courses', function($q) use($params) {
                if (isset($params['course_id'])) {
                    $q->where('course_id', $params['course_id']);
                }
                if (isset($params['start_date'])) {
                    $q->where('start_date', $params['start_date']);
                }
                if (isset($params['end_date'])) {
                    $q->where('end_date', $params['end_date']);
                }
            });
        }

        return $students->get();
    }
}
