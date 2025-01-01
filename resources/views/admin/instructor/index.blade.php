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
                       Instructors
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Experience</th>
                                    <th>Introduction</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($instructors as $index => $instructor)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $instructor->name }}</td>
                                    <td>{{ $instructor->role }}</td>
                                    <td>{{ $instructor->experience }}</td>
                                    <td>{{ $instructor->intro }}</td>
                                    <td><a href="{{ route('instructor.edit',$instructor->id) }}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{ route('instructor.delete',$instructor->id) }}" class="btn btn-danger">Delete</a></td>

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
