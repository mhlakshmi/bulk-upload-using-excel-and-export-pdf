<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FunctionController;
use App\Http\Controllers\ImportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FunctionController::class, 'index']);
Route::get('index', [FunctionController::class, 'index']);
Route::get('logout',[FunctionController::class,'logout']);

Route::post('loginpost', [FunctionController::class, 'loginpost']);
Route::get('register', [FunctionController::class, 'register']);
Route::post('user_register', [FunctionController::class, 'user_register']);
Route::get('sidebar',[FunctionController::class,'sidebar'])->name('sidebar');

// STUDENT
Route::get('student_list',[FunctionController::class,'student_list'])->name('student_list');
Route::get('/add_student',[FunctionController::class,'add_student']);
Route::get('/edit_student/{id}',[FunctionController::class,'edit_student'])->name('edit_student');

Route::post('insert_student',[FunctionController::class,'insert_student'])->name('insert_student');
Route::post('/update_student/{id}',[FunctionController::class,'update_student'])->name('update_student');
Route::get('/delet_student/{id}', [FunctionController::class, 'delet_student'])->name('delet_student');

// import

Route::get('export', [ImportController::class,'export'])->name('export');
Route::get('/bulkupload',[ImportController::class,'bulkupload']);
Route::post('import', [ImportController::class,'import'])->name('import');

Route::get('/generatestudentPDF/{id}', [ImportController::class, 'generatestudentPDF'])->name('generatestudentPDF');

