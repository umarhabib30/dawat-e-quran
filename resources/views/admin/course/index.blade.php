@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        Courses
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Auther</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $index => $course)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $course->category->name }}</td>
                                       <td>{{ $course->title }}</td>
                                       <td><img src="{{ asset($course->image) }}" alt="" height="50px"></td>
                                       <td>{{ Str::limit($course->description , 150, '...') }}</td>
                                       <td>{{ $course->auther }}</td>
                                       <td><a href="{{ route('course.chapters.index',$course->id) }}" class="btn btn-primary">Chapters</a></td>
                                       <td><a href="{{ route('course.edit',$course->id) }}" class="btn btn-primary">Edit</a></td>
                                       <td><a href="{{ route('course.delete',$course->id) }}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach

                            </tbody>

                            {{-- <tfoot>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> --}}
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
