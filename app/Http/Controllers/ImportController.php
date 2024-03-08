<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use PDF;
use App\Models\Student;

use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function bulkupload()
    {
        return view('bulkupload');
    }

    public function import()
    {
        try {
            Excel::import(new StudentsImport, request()->file('file'));
        } catch (ValidationException $e) {
            $failures = $e->failures();
          
            foreach ($failures as $failure) {
                $failure->row(); 
                $failure->attribute(); 
                $failure->errors(); 
                $failure->values(); 
            }
            
            return back()->withErrors('There was an error in the import process. Please check the file and try again.');
        } catch (\Exception $e) {
            
            return back()->withErrors('An error occurred during the import process. Please try again.');
        }
        
      
        return back()->withErrors('Imported Succesfully!');;
    }

    public function export()
    {
        $students = Student::orderBy('register_no')->get();
        $pdf = PDF::loadView('pdf_studentdetails', array('student' => $students))
            ->setPaper('a4', 'portrait');
        //return $pdf->stream();
        return $pdf->download('student-details.pdf');
    }

    public function generatestudentPDF($id)
    {
        $student = DB::table('students')->where('id', $id)->first();
        $data = [

            'student' => $student,
        ];
        $pdf = PDF::loadView('pdf', $data);
        //return $pdf->stream();
        return $pdf->download($student->register_no . '.pdf');
    }


}
