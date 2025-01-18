@extends('user.layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-4">
                <div class="bg-light p-3 rounded">
                    <div class="mb-4">
                        <h6 class="fw-bold">Search</h6>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Course..." id="keyword">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="fw-bold">Category</h6>
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input class="form-check-input category_id" type="checkbox"
                                    id="{{ $category->id  }}" value="{{ $category->id }}">
                                <label class="form-check-label"
                                    for="category-{{ $category->id }}">{{ $category->name }}</label>
                                <span class="ms-2">({{ $category->course->count() }})</span>
                            </div>
                        @endforeach
                    </div>

                    <a href="#" class="btn btn-outline-danger w-100">
                        <i class="fas fa-times"></i> Clear All Filters
                    </a>
                </div>
            </div>

            <div class="col-md-8" >
                <div id="courses_list">
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
                                                <i class="fas fa-calendar-alt me-1"></i> {{ $course->lessonCount->count() }}
                                                Chapter
                                            </span>
                                        </div>
                                        <a href="{{ route('course.details', $course->id) }}" class="text-decoration-none">
                                            <h5 class="card-title">{{ $course->title }}</h5>
                                        </a>
                                        <p class="card-text">{{ Str::limit($course->description, 250, '...') }}</p>
                                        <p class="card-text fw-bold">{{ $course->auther }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $courses->links('pagination::bootstrap-5') !!}
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).on('input change', '#keyword, .category_id', function() {
            let keyword = $('#keyword').val();
            let selectedCategories = [];
            $('.category_id:checked').each(function() {
                selectedCategories.push($(this).attr('id'));
            });

            $.ajax({
                url: "{{ route('course.filter') }}",
                method: "GET",
                data: {
                    keyword: keyword,
                    categories: selectedCategories
                },
                success: function(response) {
                    console.log(response);
                    if (response.courses) {
                        $('#courses_list').html(response.courses);
                    } else if (response.message) {
                        $('#courses_list').html('<div class="col-12 text-center"><p>' + response
                            .message + '</p></div>');
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        });
    </script>
@endsection
