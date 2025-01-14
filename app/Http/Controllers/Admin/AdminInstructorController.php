<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class AdminInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'active' => 'instructor',
            'title' => 'Instructors',
            'instructors' => Instructor::all(),
        ];

        return view('admin.instructor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'active' => 'instructor',
            'title' => 'Instructors',
        ];

        return view('admin.instructor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $path = ImageHelper::saveImage($request->image, 'Images/instructor');
            $data = $request->all();
            $data['image'] = $path;
            Instructor::create($data);
            alert()->success('Success', 'Instructor added successfully.');
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error('Error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = [
            'active' => 'instructor',
            'title' => 'Edit Instructors',
            'instructor' => Instructor::find($id),
        ];

        return view('admin.instructor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $instructor = Instructor::find($request->id);
            if ($request->hasFile('image')) {
                $path =  ImageHelper::saveImage($request->image, 'Images/instructor');
                $data = $request->all();
                $data['image'] = $path;
                $instructor->update($data);
                alert()->success('Success', 'Instructor Updated successfully.');
                return redirect()->back();
            } else {
                $instructor->update([
                    'name' => $request->name,
                    'role' => $request->role,
                    'intro' => $request->intro,
                    'experience' => $request->experience,
                    'subject' => $request->subject,
                ]);
                alert()->success('Success', 'Instructor Updated successfully.');
                return to_route('instructor.index');
            }
        } catch (\Exception $e) {
            alert()->error('Error', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Instructor::find($id)->delete();
            alert()->success('Success', 'Instructor added successfully.');
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error('Error', $e->getMessage());
            return redirect()->back();
        }
    }
}
