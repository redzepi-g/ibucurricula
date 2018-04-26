<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

use App\Department;
use App\Professor;
use App\Assistant;
use App\Course;

class BaseController extends Controller
{
    public function index(){

        $departments = Department::all();

        return view('welcome')->with('departments', $departments);
    }

    //next department function
    public function next(Request $request){

        $department = Department::find($request->department);
        $year = 'first';
        $semester = 'fall';

        return view('department.index')->with('department', $department)
                                       ->with('year',$year)
                                       ->with('semester',$semester);

    }

    //first spring
    public function nextFirstSpring(Request $request){

        $departmentId = $request->department;
        $year = $request->year;
        $semester = $request->semester;

        //find department
        $department = Department::find($departmentId);
        $short = $department->shortname;


        Schema::create($short.'_'.$year.'_'.$semester, function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('course');
            $table->string('weeklyhours');
            $table->integer('ects');
            $table->string('professor');
            $table->string('assistant');
            $table->integer('students');
            $table->mediumText('comment');
            $table->timestamps();
        });

        $courses = $request->course;

        foreach($courses as $course){

            $currentCourse = Course::find($course);

            if(isset($currentCourse->assistant->name)){

                $assistant = $currentCourse->assistant->name;
            }else{
                
                $assistant = "Not assigned";
            }

            DB::table($short.'_'.$year.'_'.$semester)->insert(
                [
                    'code' => $currentCourse->id,
                    'course' => $currentCourse->name,
                    'weeklyhours' => $currentCourse->weeklyhours,
                    'ects' => $currentCourse->ects,
                    'professor' => $currentCourse->professor->name,
                    'assistant' => $assistant,
                    'students' => '0',
                    'comment' => 'Just another comment for testing purposes'
                ]
            );
        }

        $semester = 'spring';
        
        return view('department.index')->with('department', $department)
                                       ->with('year',$year)
                                       ->with('semester',$semester);


    }
}
