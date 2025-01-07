<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'name',
        'course_id',
    ];

    public function lessons(){
        return $this->hasMany(Lesson::class,'chapter_id');
    }
}
