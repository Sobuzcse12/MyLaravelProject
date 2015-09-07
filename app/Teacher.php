<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table ="teacher";
    protected $primaryKey="teacher_id";

    protected $fillable=[
    'teacher_id',
    'teacher_name',
    'email',
    'dept_code',
    'dept_name',
    'con_no'
    ];
}
