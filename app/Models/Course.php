<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'auther',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Chapter::class);
    }


    public function lessonCount()
    {
        return $this->hasMany(Chapter::class, 'course_id');
    }
}
