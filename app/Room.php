<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table ="room";
    protected $primaryKey="room_no";

    protected $fillable=[
    'room_no',
    'building_no'
    ];
}

