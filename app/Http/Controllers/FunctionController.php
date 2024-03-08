<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class FunctionController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('register');
    }

    public function loginpost(Request $req)
    {
        $inputs = $req->all();
        $password = $inputs['password'];
        $login = Auth::attempt(["email" => $inputs['uname'], "password" => $password]);

        if ($login) {
            return redirect('student_list');
        }
        return redirect()->back()->with('msg', 'Invalid credentials');
    }

    public function user_register(Request $req)
    {
        $inputs = $req->all();

        $email = $inputs['email'];
        $password = $inputs['password'];

        $hashedPassword = Hash::make($password);


        $existingUser = User::where('email', $inputs['email'])->first();
        if ($existingUser) {
            return redirect('register')->with('msg', 'Email already exists');
        }


        User::insert([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'mobile' => $inputs['mobile'],
            'password' => $hashedPassword,
            'created_at' => now()
        ]);
        return redirect('register')->with('msg', 'Registered successfully');


    }

    public function logout()
    {
        Auth::logout();
        return redirect('index');
    }


    public function student_list()
    {
        $student_data = DB::table('students')->orderBy('register_no')->get();
        return view('student_list', ['students' => $student_data]);
    }

    public function add_student()
    {
        $lastStudent = DB::table('students')
            ->orderBy('register_no', 'desc')
            ->first();

        $lastNumber = 0;
        if ($lastStudent) {
            $lastRegisterNo = $lastStudent->register_no;
            preg_match('/\d{2}$/', $lastRegisterNo, $matches);
            if (!empty($matches)) {
                $lastNumber = intval($matches[0]);
            }
        }

        $nextNumber = $lastNumber + 1;
        $register_no = 'STUD' . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
        return view('add_student', ['register_no' => $register_no]);
    }

    public function insert_student(Request $request)
    {

        Student::insert([
            'register_no' => $request->register_no,
            'student_name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'email_id' => $request->email,
            'father_name' => $request->fname,
            'contact_no' => $request->mobile,
            'created_at' => now()
        ]);

        return $this->student_list();
    }
    public function edit_student($id)
    {
        $stud = DB::table('students')->where('id', $id)->first();
        return view('edit_student', ['stud' => $stud]);
    }

    public function update_student(Request $request, $id)
    {
        $data = Student::find($id);
        if ($data !== null) {

            $input = $request->all();


            DB::table('students')
                ->where('id', $id)
                ->update([
                    'register_no' => $input['register_no'],
                    'student_name' => $input['name'],
                    'gender' => $input['gender'],
                    'dob' => $input['dob'],
                    'email_id' => $input['email'],
                    'father_name' => $input['fname'],
                    'contact_no' => $input['mobile'],
                    'updated_at' => now()
                ]);
        }
        // return $this->student_list();
         return redirect()->back();
    }


    public function delet_student($id)
    {
        $dataId = $id;
        $data = Student::find($dataId);
        if ($data !== null) {
            DB::table('students')
                ->where('id', $dataId)
                ->delete();
        }
        return $this->student_list();
    }



}
