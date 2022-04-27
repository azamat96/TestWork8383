<?php

namespace App\Repositories\Interfaces;

use App\User;

interface StudentRepositoryInterface
{
    public function search($params = []);
}
