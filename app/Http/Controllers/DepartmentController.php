<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function find($id)
    {   
        $department = Department::find($id)->courses;
        return $department;
    }
}
