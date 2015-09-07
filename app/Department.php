<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table ="department";
    protected $primaryKey="dept_code";

    protected $fillable=[
    'dept_code',
    'dept_name',
    'room_no',
    'building_no'
    ];
}
