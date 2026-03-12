<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'class',
        'roll',
        'email',
        'birth_date',
        'gender',
        'status'
    ];
}
