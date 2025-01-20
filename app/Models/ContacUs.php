<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContacUs extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
