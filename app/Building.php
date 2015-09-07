<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	protected $table ="building";
    protected $primaryKey="building_no";

    protected $fillable=[
    'building_no',
    'building_name'
    ];
}
