<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable=[
        'name','image','role','intro','experience','subject',
    ];
}
