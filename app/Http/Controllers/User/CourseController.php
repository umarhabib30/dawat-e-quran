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
        $courses = Course::paginate(10);
        $data = [
            'title' => 'Courses',
            'breadcrumbs' => array('home' => 'Home', 'courses' => 'Courses'),
            'active' => 'courses',
            'courses' => $courses,
            'categories' => Category::all(),
        ];
        return view('user.course.index', $data);
    }

    public function show($id)
    {
        $data = [
            'title' => 'Course Details',
            'breadcrumbs' => array('home' => 'Home', 'courses' => 'Courses'),
            'active' => 'courses',
            'course' => Course::find($id),
            'chapters' => Chapter::where('course_id', $id)->get()
        ];
        return view('user.course.details', $data);
    }


    public function filter(Request $request)
    {
        $keyword = $request->input('keyword');
        $categories = $request->input('categories', []);
        $page = $request->input('page', 1); // Get current page from the request

        $query = Course::query();

        // Apply keyword filter
        if ($keyword) {
            $query->where(function ($q) use ($keyword) {
                $q->where('title', 'like', '%' . $keyword . '%')
                    ->orWhere('auther', 'like', '%' . $keyword . '%');
            });
        }

        // Apply category filter if categories are selected
        if (!empty($categories)) {
            $query->whereIn('category_id', $categories);
        }

        // Paginate the results
        $courses = $query->get();  // Adjust the number per page as needed

        if ($courses->isEmpty()) {
            return response()->json(['message' => 'No courses found.']);
        }

        // Return the courses and pagination as rendered views
        return response()->json([
            'courses' => view('user.course.partial', compact('courses'))->render(),
        ]);
    }
}
