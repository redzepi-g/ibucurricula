<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;



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

        $department = Department::find($departmentId);

        $first_fall = DB::table('ce_first_fall')->get();
        $first_spring = DB::table('ce_first_spring')->get();
        $count = count($first_fall);
        $count_first_spring = count($first_spring);

        $lastrow = 0;
      

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('IBU Office')
            ->setLastModifiedBy('IBU Office')
            ->setTitle('Office 2007 XLSX Test Document')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');

        for($i = 3; $i<=$count+2; $i++){

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1' , '#')
        ->setCellValue('B1', 'Code')
        ->setCellValue('C1', 'Course')
        ->setCellValue('D1', 'Weekly Hours')
        ->setCellValue('E1', 'ECTS')
        ->setCellValue('F1', 'Professor')
        ->setCellValue('G1', 'Assistant')
        ->setCellValue('H1','Nr of Students')
        ->setCellValue('I1','Comments')
        ->setCellValue('A2', '1st Year - Fall Semester')
        ->setCellValue('A'.$i, $first_fall[$i-3]->id)
        ->setCellValue('B'.$i, $first_fall[$i-3]->code)
        ->setCellValue('C'.$i, $first_fall[$i-3]->course)
        ->setCellValue('D'.$i, $first_fall[$i-3]->weeklyhours)
        ->setCellValue('E'.$i, $first_fall[$i-3]->ects)
        ->setCellValue('F'.$i, $first_fall[$i-3]->professor)
        ->setCellValue('G'.$i, $first_fall[$i-3]->assistant)
        ->setCellValue('H'.$i, $first_fall[$i-3]->students)
        ->setCellValue('I'.$i, $first_fall[$i-3]->comment);
        
        $lastrow = $i;
        }

        $lastrow++;
  
                 //9                   //6                 //9
        for($i = $lastrow; $i< 16; $i++){
            
            $c= ($i - $lastrow)-1;
            
 
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow , '1st Year - Spring Semester')
        ->setCellValue('A'.$i, $first_spring[$c]->id);
            
        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Simple');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="01simple.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');


        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;


       
    }


    public function courses(Request $request){

        $departmentId = $request->department;

        echo "I am COURSES" .$departmentId;
    }
}
