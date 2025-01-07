@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <h5 class="card-header">Edit Chapter</h5>
        <div class="card-body">
            <form action="{{ route('course.chapter.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="" value="{{ $chapter->id }}">
                <input type="hidden" name="courseId" id="" value="{{ $course_id }}">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Name</label>
                    <input id="inputText3" type="text" class="form-control" name="name" value="{{ $chapter->name }}"
                        placeholder="Enter Chapter title">
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
