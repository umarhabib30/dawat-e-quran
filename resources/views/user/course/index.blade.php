@extends('user.layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-4">
                <div class="bg-light p-3 rounded">
                    <div class="mb-4">
                        <h6 class="fw-bold">Search</h6>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Course...">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="fw-bold">Category</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="type-1">
                            <label class="form-check-label" for="type-1">Course</label>
                            <span class="ms-2">(20,000)</span>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="type-2">
                            <label class="form-check-label" for="type-2">Bundle</label>
                            <span class="ms-2">(20,000)</span>
                        </div>
                    </div>
                    <a href="#" class="btn btn-outline-danger w-100">
                        <i class="fas fa-times"></i> Clear All Filters
                    </a>
                </div>
            </div>

            <div class="col-md-8">

                @foreach ($courses as $course)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset($course->image) }}" class="img-fluid" alt="course"
                                        style="width: 100%; ">
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-2">
                                        <span class="badge bg-primary">{{ $course->category->name }}</span>
                                    </div>
                                    <div class="d-flex mb-2 flex-wrap">
                                        <span class="me-3">
                                            <i class="fas fa-calendar-alt me-1"></i> {{ $course->lessonCount->count() }} Lessons
                                        </span>
                                        {{-- <span>
                                            <i class="fas fa-users me-1"></i> 54 Students
                                        </span> --}}
                                    </div>
                                    <a href="single-course.html" class="text-decoration-none">
                                        <h5 class="card-title">{{ $course->title }}</h5>
                                    </a>
                                    <p class="card-text">{{ Str::limit($course->description, 250, '...')  }}</p>
                                    <p class="card-text fw-bold">{{ $course->auther }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/user/img/blog-3.jpg') }}" class="img-fluid" alt="course"  style="width: 100%; ">
                            </div>
                            <div class="col-md-8">
                                <div class="mb-2">
                                    <span class="badge bg-primary">Web Development</span>
                                </div>
                                <div class="d-flex mb-2 flex-wrap">
                                    <span class="me-3">
                                        <i class="fas fa-calendar-alt me-1"></i> 25 Lessons
                                    </span>
                                    <span>
                                        <i class="fas fa-users me-1"></i> 54 Students
                                    </span>
                                </div>
                                <a href="single-course.html" class="text-decoration-none">
                                    <h5 class="card-title">The Complete Web Developer in 2023: Zero to Mastery</h5>
                                </a>
                                <p class="card-text">Discover a world of knowledge and learning opportunities</p>
                                <p class="card-text fw-bold">Dr. Angela Yu</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
