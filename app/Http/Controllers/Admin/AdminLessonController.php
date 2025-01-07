<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Lesson;
use Exception;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    public function index($id)
    {

        $data = [
            'active' => 'course',
            'title' => 'Lessons',
            'lessons' =>  Lesson::where('chapter_id', $id)->get(),
            'chapter_id' => $id,
            'chapter' => Chapter::find($id),
        ];

        return view('admin.lesson.index', $data);
    }

    public function store(Request $request)
    {

        try {
            if ($request->content_type == 'pdf') {
                $content =  FileHelper::save($request->pdf, 'lessons');
            } else {
                $content = $request->video_link;
            }

            Lesson::create([
                'name' => $request->name,
                'content_type' => $request->content_type,
                'content' => $content,
                'chapter_id' => $request->chapter_id
            ]);

            alert()->success('Success', 'Lesson added Successfully');
            return redirect()->back();
        } catch (Exception $e) {
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {

        $data = [
            'active' => 'course',
            'title' => 'Edit Lesson',
            'lesson' =>  Lesson::find($id),
        ];

        return view('admin.lesson.edit', $data);
    }

    public function update(Request $request)
    {
        $lesson = Lesson::find($request->lesson_id);

        if ($request->content) {
            if ($request->content_type == 'pdf') {
                $content = FileHelper::save($request->pdf, 'lessons');
            } else if ($request->content_type == 'link') {
                $content = $request->video_link;
            }
        }else {
            $content = $lesson->content;
        }

        $lesson->update([
            'name' => $request->name,
            'content' => $content,
            'content_type' => $request->content_type
        ]);

        alert()->success('Success', 'Lesson updated Successfully');
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $lesson = Lesson::find($id);
            $lesson->delete();
            alert()->success('Success', 'Lesson deleted successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            alert()->error('Error',  $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
