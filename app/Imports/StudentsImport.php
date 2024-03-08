<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            //
            'register_no' =>$row[0],
            'student_name' => $row[1],
            'gender' => $row[2],
            'dob' => $row[3],
            'email_id' => $row[4],
            'father_name' => $row[5],
            'contact_no' => $row[6],
            
        ]);
    }
}
