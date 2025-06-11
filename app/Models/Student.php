<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'student_id', 'student_name', 'class_section','student_father_name', 'dob',  'gender', 'blood_group', 'mobile','contact_address','student_image','terms_conditions',
    ];
}
