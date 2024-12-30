<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create', ['active' => 'course', 'title' => 'Add Course', 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if ($request->hasFile('image')) {
                $image = ImageHelper::saveImage($request->image, 'Images/course');
            } else {
                $image = '';
            }

            $course = Course::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image,
                'auther' => $request->auther,
                'category_id' => $request->category_id
            ]);

            if ($course) {
                alert()->success('Success', 'Course Added Successfully');
                return redirect()->back();
            }
        } catch (\Exception $e) {
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
