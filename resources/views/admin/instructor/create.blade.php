@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Add Course</h5>
        <div class="card-body">
            <form action="{{ route('instructor.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="form-group col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="images" class="form-label">Image</label>
                        <input type="file" name="image" id="images" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" name="role" id="role" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" name="experience" id="experience" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" id="subject" required class="form-control">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="intro" class="form-label">Introduction</label>
                        <textarea name="intro" id="intro" class="form-control" rows="4"></textarea>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
