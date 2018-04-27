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

class CPanelController extends Controller
{
    public function index(){

        $departments = Department::all();
        return view('cpanel.index')->with('departments', $departments);
    }

    public function curriculum(Request $request){

        $departmentId = $request->department;
        $department = Department::find($departmentId);
        $short = $department->shortname;

        try{
           $first_fall = DB::table($short.'_first_fall')->get();
        }catch(\Exception $e){

            $first_fall = NULL;
        }

        try{
            $first_spring = DB::table($short.'_first_spring')->get();
         }catch(\Exception $e){
 
             $first_spring = NULL;
         }

         try{
            $second_fall = DB::table($short.'_second_fall')->get();
         }catch(\Exception $e){
 
             $second_fall = NULL;
         }
         try{
            $second_spring = DB::table($short.'_second_spring')->get();
         }catch(\Exception $e){
 
             $second_spring = NULL;
         }
         try{
            $third_fall = DB::table($short.'_third_fall')->get();
         }catch(\Exception $e){
 
             $third_fall = NULL;
         }
         try{
            $third_spring = DB::table($short.'_third_spring')->get();
         }catch(\Exception $e){
 
             $third_spring = NULL;
         }
         try{
            $fourth_fall = DB::table($short.'_fourth_fall')->get();
         }catch(\Exception $e){
 
             $fourth_fall = NULL;
         }
         try{
            $fourth_spring = DB::table($short.'_fourth_spring')->get();
         }catch(\Exception $e){
 
             $fourth_spring = NULL;
         }


        return view('cpanel.curriculum')->with('department', $department)
                                        ->with('first_fall', $first_fall)
                                        ->with('first_spring', $first_spring)
                                        ->with('second_fall', $second_fall)
                                        ->with('second_spring', $second_spring)
                                        ->with('third_fall', $third_fall)
                                        ->with('third_spring', $third_spring)
                                        ->with('fourth_fall', $fourth_fall)
                                        ->with('fourth_spring', $fourth_spring);
    }

    public function staff(Request $request){

        $departmentId = $request->department;

        echo "I am STAFF" .$departmentId;
    }


    public function courses(Request $request){

        $departmentId = $request->department;

        echo "I am COURSES" .$departmentId;
    }
}
