@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <h5 class="card-header">Add Chapter</h5>
        <div class="card-body">
            <form action="{{ route('course.chapter.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="course_id" id="" value="{{ $course_id }}">
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Name</label>
                    <input id="inputText3" type="text" class="form-control" name="name"
                        placeholder="Enter Chapter title">
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>


    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        Chapters of : <b>{{ $course->title }}</b>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chapters as $index => $chapter)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $chapter->name }}</td>
                                        <td>
                                            <a href="{{ route('chapter.lessons.index', $chapter->id) }}"
                                                class="btn btn-primary">Lessons</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('course.chapters.edit', $chapter->id) }}"
                                                class="btn btn-primary">Edit</a>
                                        </td>

                                        <td>
                                            <a href="{{ route('course.chapters.delete', $chapter->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>
@endsection
