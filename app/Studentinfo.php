<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentinfo extends Model
{
	protected $table ="student";
    protected $primaryKey="std_id";

    protected $fillable=[
    'std_id',
    'std_name',
    'email',
    'dept_code',
    'dept_name',
    'course_no',
    'building_no',
    'con_no',
    'term',
    'year'
    ];
}
