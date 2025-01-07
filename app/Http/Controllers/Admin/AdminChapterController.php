<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminChapterController extends Controller
{
    public function index($id)
    {

        $data = [
            'active' => 'course',
            'title' => 'Chapter',
            'chapters' => Chapter::where('course_id', $id)->get(),
            'course_id' => $id,
            'course' => Course::find($id),
        ];

        return view('admin.chapter.index', $data);
    }

    public function store(Request $request)
    {
        try {

            Chapter::create([
                'name' => $request->name,
                'course_id' => $request->course_id
            ]);
            alert()->success('Success', 'Chapter added Successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id){
        $data = [
            'active' => 'course',
            'title' => 'Edit Chapter',
            'chapter' => Chapter::find($id),
            'course_id' => $id,
        ];
        return view('admin.chapter.edit',$data);
    }

    public function update(Request $request){
        try{
            $chapter = Chapter::find($request->id);
            $chapter->update($request->all());
            alert()->success('Success', 'Chapter updated Successfully');
            return redirect()->route('course.chapters.index', $request->courseId);
        }catch(\Exception $e){
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function delete($id){
        try{
            Chapter::find($id)->delete();
            alert()->success('Success', 'Chapter deleted Successfully');
            return redirect()->back();
        }catch(\Exception $e){
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
