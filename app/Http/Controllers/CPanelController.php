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
        $second_fall = DB::table('ce_second_fall')->get();
        $second_spring = DB::table('ce_second_spring')->get();
        $third_fall = DB::table('ce_third_fall')->get();
        $third_spring = DB::table('ce_third_spring')->get();
        $fourth_fall = DB::table('ce_fourth_fall')->get();
        $fourth_spring = DB::table('ce_fourth_spring')->get();

        $count = count($first_fall);
        $count_first_spring = count($first_spring);
        $count_second_fall = count($second_fall);
        $count_second_spring = count($second_spring);
        $count_third_fall = count($third_fall);
        $count_third_spring = count($third_spring);
        $count_fourth_fall = count($fourth_fall);
        $count_fourth_spring = count($fourth_spring);

        $lastrow = 0;

    
      

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('IBU Office')
            ->setLastModifiedBy('IBU Office')
            ->setTitle('CE Curriculum for year 2018-2019')
            ->setSubject('CE Curriculum for year 2018-2019')
            ->setDescription('CE Curriculum for year 2018-2019')
            ->setKeywords('ce curriculum year 2018 2019')
            ->setCategory('Curriculum');
            
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

        /* STYLE CELLS */

        $spreadsheet->getActiveSheet()->mergeCells('A2:I2');
        $spreadsheet->getActiveSheet()->getStyle('A2:I2')
    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
            $spreadsheet->getActiveSheet()->getStyle('A2:I2')
        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A2:I2')
            ->getFill()->getStartColor()->setARGB('109800');
            $spreadsheet->getActiveSheet()->getStyle('A2:I2')
            ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
            //
            $spreadsheet->getActiveSheet()->mergeCells('A9:I9');
            $spreadsheet->getActiveSheet()->getStyle('A9:I9')
        ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $spreadsheet->getActiveSheet()->getStyle('A9:I9')
            ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
            $spreadsheet->getActiveSheet()->getStyle('A9:I9')
                ->getFill()->getStartColor()->setARGB('109800');
                $spreadsheet->getActiveSheet()->getStyle('A9:I9')
                ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
            //
            $spreadsheet->getActiveSheet()->mergeCells('A16:I16');
            $spreadsheet->getActiveSheet()->getStyle('A16:I16')
        ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                $spreadsheet->getActiveSheet()->getStyle('A16:I16')
            ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
            $spreadsheet->getActiveSheet()->getStyle('A16:I16')
                ->getFill()->getStartColor()->setARGB('109800');
                $spreadsheet->getActiveSheet()->getStyle('A16:I16')
                ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                //

                $spreadsheet->getActiveSheet()->mergeCells('A23:I23');
                $spreadsheet->getActiveSheet()->getStyle('A23:I23')
            ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                    $spreadsheet->getActiveSheet()->getStyle('A23:I23')
                ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                $spreadsheet->getActiveSheet()->getStyle('A23:I23')
                    ->getFill()->getStartColor()->setARGB('109800');
                    $spreadsheet->getActiveSheet()->getStyle('A23:I23')
                    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                    //

                    $spreadsheet->getActiveSheet()->mergeCells('A30:I30');
                    $spreadsheet->getActiveSheet()->getStyle('A30:I30')
                ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                        $spreadsheet->getActiveSheet()->getStyle('A30:I30')
                    ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                    $spreadsheet->getActiveSheet()->getStyle('A30:I30')
                        ->getFill()->getStartColor()->setARGB('109800');
                        $spreadsheet->getActiveSheet()->getStyle('A30:I30')
                        ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                        //

                        $spreadsheet->getActiveSheet()->mergeCells('A37:I37');
                        $spreadsheet->getActiveSheet()->getStyle('A37:I37')
                    ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                            $spreadsheet->getActiveSheet()->getStyle('A37:I37')
                        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                        $spreadsheet->getActiveSheet()->getStyle('A37:I37')
                            ->getFill()->getStartColor()->setARGB('109800');
                            $spreadsheet->getActiveSheet()->getStyle('A37:I37')
                            ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                            //
                            $spreadsheet->getActiveSheet()->mergeCells('A44:I44');
                            $spreadsheet->getActiveSheet()->getStyle('A44:I44')
                        ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                                $spreadsheet->getActiveSheet()->getStyle('A44:I44')
                            ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                            $spreadsheet->getActiveSheet()->getStyle('A44:I44')
                                ->getFill()->getStartColor()->setARGB('109800');
                                $spreadsheet->getActiveSheet()->getStyle('A44:I44')
                                ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                                //

                                $spreadsheet->getActiveSheet()->mergeCells('A51:I51');
                                $spreadsheet->getActiveSheet()->getStyle('A51:I51')
                            ->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                                    $spreadsheet->getActiveSheet()->getStyle('A51:I51')
                                ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
                                $spreadsheet->getActiveSheet()->getStyle('A51:I51')
                                    ->getFill()->getStartColor()->setARGB('109800');
                                    $spreadsheet->getActiveSheet()->getStyle('A51:I51')
                                    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
                                    //
        $spreadsheet->getActiveSheet()->getStyle('A1:I1')
    ->getFont()->getColor()->setARGB(\PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE);
        $spreadsheet->getActiveSheet()->getStyle('A1:I1')
        ->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID);
        $spreadsheet->getActiveSheet()->getStyle('A1:I1')
            ->getFill()->getStartColor()->setARGB('0d4789');
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);


        $lastrow++;
        $c = $lastrow+1;

        $lastrow_first_spring = 0;
                 //9                 //6             //9
        for($i = $lastrow; $i< $count_first_spring + $lastrow ;$i++){
           
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow , '1st Year - Spring Semester')
        ->setCellValue('A'.$c, $first_spring[$i-9]->id)
        ->setCellValue('B'.$c, $first_spring[$i-9]->code)
        ->setCellValue('C'.$c, $first_spring[$i-9]->course)
        ->setCellValue('D'.$c, $first_spring[$i-9]->weeklyhours)
        ->setCellValue('E'.$c, $first_spring[$i-9]->ects)
        ->setCellValue('F'.$c, $first_spring[$i-9]->professor)
        ->setCellValue('G'.$c, $first_spring[$i-9]->assistant)
        ->setCellValue('H'.$c, $first_spring[$i-9]->students)
        ->setCellValue('I'.$c, $first_spring[$i-9]->comment);

        $c++;
        
        $lastrow_first_spring = $i;

        }

        //second year fall
        $lastrow_first_spring += 2;
        $c = $lastrow_first_spring+1;

        $lastrow_second_fall = 0;
                 //16                 
        for($i = $lastrow_first_spring; $i< $count_second_fall + $lastrow_first_spring ;$i++){
           
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_first_spring , '2nd Year - Fall Semester')
        ->setCellValue('A'.$c, $second_fall[$i-16]->id)
        ->setCellValue('B'.$c, $second_fall[$i-16]->code)
        ->setCellValue('C'.$c, $second_fall[$i-16]->course)
        ->setCellValue('D'.$c, $second_fall[$i-16]->weeklyhours)
        ->setCellValue('E'.$c, $second_fall[$i-16]->ects)
        ->setCellValue('F'.$c, $second_fall[$i-16]->professor)
        ->setCellValue('G'.$c, $second_fall[$i-16]->assistant)
        ->setCellValue('H'.$c, $second_fall[$i-16]->students)
        ->setCellValue('I'.$c, $second_fall[$i-16]->comment);

        $c++;
        
        $lastrow_second_fall = $i;

        }

        //second year spring
        $lastrow_second_fall += 2;
        $c = $lastrow_second_fall+1;

        $lastrow_second_spring = 0;
                 //23                 
        for($i = $lastrow_second_fall; $i< $count_second_spring + $lastrow_second_fall ;$i++){
           
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_second_fall , '2nd Year - Spring Semester')
        ->setCellValue('A'.$c, $second_spring[$i-23]->id)
        ->setCellValue('B'.$c, $second_spring[$i-23]->code)
        ->setCellValue('C'.$c, $second_spring[$i-23]->course)
        ->setCellValue('D'.$c, $second_spring[$i-23]->weeklyhours)
        ->setCellValue('E'.$c, $second_spring[$i-23]->ects)
        ->setCellValue('F'.$c, $second_spring[$i-23]->professor)
        ->setCellValue('G'.$c, $second_spring[$i-23]->assistant)
        ->setCellValue('H'.$c, $second_spring[$i-23]->students)
        ->setCellValue('I'.$c, $second_spring[$i-23]->comment);

        $c++;
        
        $lastrow_second_spring = $i;

        }

        //third fall
        $lastrow_second_spring += 2;
        $c = $lastrow_second_spring+1;

        $lastrow_third_fall = 0;
        //30                 
        for($i = $lastrow_second_spring; $i< $count_third_fall + $lastrow_second_spring ;$i++){
           
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_second_spring , '3rd Year - Fall Semester')
        ->setCellValue('A'.$c, $third_fall[$i-30]->id)
        ->setCellValue('B'.$c, $third_fall[$i-30]->code)
        ->setCellValue('C'.$c, $third_fall[$i-30]->course)
        ->setCellValue('D'.$c, $third_fall[$i-30]->weeklyhours)
        ->setCellValue('E'.$c, $third_fall[$i-30]->ects)
        ->setCellValue('F'.$c, $third_fall[$i-30]->professor)
        ->setCellValue('G'.$c, $third_fall[$i-30]->assistant)
        ->setCellValue('H'.$c, $third_fall[$i-30]->students)
        ->setCellValue('I'.$c, $third_fall[$i-30]->comment);

        $c++;
        
        $lastrow_third_fall = $i;

        }

        //third spring
        $lastrow_third_fall += 2;
        $c = $lastrow_third_fall+1;

        $lastrow_third_spring = 0;
        //37                 
        for($i = $lastrow_third_fall; $i< $count_third_spring + $lastrow_third_fall ;$i++){
           
            // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_third_fall , '3rd Year - Spring Semester')
        ->setCellValue('A'.$c, $third_spring[$i-37]->id)
        ->setCellValue('B'.$c, $third_spring[$i-37]->code)
        ->setCellValue('C'.$c, $third_spring[$i-37]->course)
        ->setCellValue('D'.$c, $third_spring[$i-37]->weeklyhours)
        ->setCellValue('E'.$c, $third_spring[$i-37]->ects)
        ->setCellValue('F'.$c, $third_spring[$i-37]->professor)
        ->setCellValue('G'.$c, $third_spring[$i-37]->assistant)
        ->setCellValue('H'.$c, $third_spring[$i-37]->students)
        ->setCellValue('I'.$c, $third_spring[$i-37]->comment);

        $c++;
        
        $lastrow_third_spring = $i;

        }

        //fourth fall
        $lastrow_third_spring += 2;
        $c = $lastrow_third_spring+1;

        $lastrow_fourth_fall = 0;
        //44                 
        for($i = $lastrow_third_spring; $i< $count_fourth_fall + $lastrow_third_spring ;$i++){
           
        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_third_spring , '4th Year - Fall Semester')
        ->setCellValue('A'.$c, $fourth_fall[$i-44]->id)
        ->setCellValue('B'.$c, $fourth_fall[$i-44]->code)
        ->setCellValue('C'.$c, $fourth_fall[$i-44]->course)
        ->setCellValue('D'.$c, $fourth_fall[$i-44]->weeklyhours)
        ->setCellValue('E'.$c, $fourth_fall[$i-44]->ects)
        ->setCellValue('F'.$c, $fourth_fall[$i-44]->professor)
        ->setCellValue('G'.$c, $fourth_fall[$i-44]->assistant)
        ->setCellValue('H'.$c, $fourth_fall[$i-44]->students)
        ->setCellValue('I'.$c, $fourth_fall[$i-44]->comment);

        $c++;
        
        $lastrow_fourth_fall = $i;

        }

        //fourth spring
        $lastrow_fourth_fall += 2;
        $c = $lastrow_fourth_fall+1;

        $lastrow_fourth_spring = 0;
        //51              
        for($i = $lastrow_fourth_fall; $i< $count_fourth_spring + $lastrow_fourth_fall ;$i++){
           
        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'.$lastrow_fourth_fall , '4th Year - Spring Semester')
        ->setCellValue('A'.$c, $fourth_spring[$i-51]->id)
        ->setCellValue('B'.$c, $fourth_spring[$i-51]->code)
        ->setCellValue('C'.$c, $fourth_spring[$i-51]->course)
        ->setCellValue('D'.$c, $fourth_spring[$i-51]->weeklyhours)
        ->setCellValue('E'.$c, $fourth_spring[$i-51]->ects)
        ->setCellValue('F'.$c, $fourth_spring[$i-51]->professor)
        ->setCellValue('G'.$c, $fourth_spring[$i-51]->assistant)
        ->setCellValue('H'.$c, $fourth_spring[$i-51]->students)
        ->setCellValue('I'.$c, $fourth_spring[$i-51]->comment);

        $c++;
        
        $lastrow_fourth_spring = $i;

        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('CE Curriculum for 2018-2019');

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="ce-curriculum-2018-2019.xlsx"');
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
