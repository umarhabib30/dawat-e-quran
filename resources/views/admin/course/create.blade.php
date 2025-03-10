@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h5 class="card-header">Add Course</h5>
        <div class="card-body">
            <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="category-dropdown" class="form-label">Category</label>
                        <select name="category_id" id="category-dropdown" class="form-control">
                            <option value="">Select One Value Only</option>
                            @foreach ($categories as $key => $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="auther" class="form-label">Auther</label>
                        <input type="text" name="auther" id="auther" required class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="images" class="form-label">Image</label>
                        <input type="file" name="image" id="images" class="form-control" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description" class="form-label">Course Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    </div>

                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection





