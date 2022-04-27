<?php

namespace App\Repositories;

use App\Student;
use App\User;
use App\Repositories\Interfaces\StudentRepositoryInterface;

class StudentRepository implements StudentRepositoryInterface
{
    public function search($params = [])
    {
        $students = Student::select('id','name','birth_date','phone');

        if (isset($params['name'])) {
            $students->where('name', 'like', '%'.$params['name'].'%');
        }
        if (isset($params['phone'])) {
            $students->where('phone', 'like', '%'.$params['phone'].'%');
        }
        if (isset($params['birth_date'])) {
            $students->where('birth_date', '=', $params['birth_date']);
        }

        return $students->get();
    }
}
