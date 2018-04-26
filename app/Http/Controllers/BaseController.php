<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

class BaseController extends Controller
{
    public function index(){

        $departments = Department::all();

        return view('welcome')->with('departments', $departments);
    }

    //next department function
    public function next(Request $request){

        $department = Department::find($request->department);
        $year = "first";
        $semester = "fall";

        return view('department.index')->with('department',$department)
                                       ->with('year',$year)
                                       ->with('semester',$semester);
    }
}
