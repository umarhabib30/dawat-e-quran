<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $data =[
            'title' => 'Courses',
            'breadcrumbs' => array('home'=> 'Home','courses'=> 'Courses'),
            'active' => 'courses',
            'courses' => $courses,
            'categories' => Category::all(),
        ];
        return view('user.course.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data =[
            'title' => 'Course Details',
            'breadcrumbs' => array('home'=> 'Home','courses'=> 'Courses'),
            'active' => 'courses',
            'course' => Course::find($id),
            'chapters' => Chapter::where('course_id',$id)->get()
        ];
        return view('user.course.details',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
