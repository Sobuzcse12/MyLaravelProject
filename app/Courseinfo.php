<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseinfo extends Model
{
    protected $table ="courseinfo";
    protected $primaryKey="course_no";

    protected $fillable=[
    'course_no',
    'course_title',
    'course_credit',
    'dept_code',
    ];
}
