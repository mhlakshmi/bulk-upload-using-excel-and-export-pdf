<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'register_no',
        'student_name',
        'gender',
        'dob',
        'email_id',
        'father_name',
        'contact_no',
    ];
}
