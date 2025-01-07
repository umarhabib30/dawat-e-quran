@extends('user.layouts.app')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <!-- course details-area start -->
    <div class="course-details-wrapper-2 rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-4">
                    <img src="{{ asset($course->image) }}" alt="" width="100%">
                </div>
                <div class="col-md-8">
                    <h2>{{ $course->title }}</h2>
                    <h6 class="mb-3">About Course</h6>
                    {{ $course->description }}
                    <div class="d-flex mt-3">
                        <table style="width: 100%">
                            <tr>
                                <td><b>Chapters :</b>  {{ $course->chapters->count() }}</td>
                                <td><b>Lessons :</b>  {{ $course->lessons()->count() }}</td>
                            </tr>
                            <tr>
                                <td><b>Category :</b>  {{ $course->category->name }}</td>
                                <td><b>Auther :</b>  {{ $course->auther }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="course-content-wrapper-main mt-5">
                <h5 class="title">Course Content</h5>

                <!-- course content accordion area -->
                <div class="accordion mt-3" id="accordionExample">
                    @foreach ($chapters as $chapter)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne-{{ $chapter->id }}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne-{{ $chapter->id }}" aria-expanded="true"
                                    aria-controls="collapseOne-{{ $chapter->id }}">
                                    <span>{{ $chapter->name }}</span>

                                </button>
                            </h2>
                            <div id="collapseOne-{{ $chapter->id }}" class="accordion-collapse collapse"
                                aria-labelledby="headingOne-{{ $chapter->id }}" data-bs-parent="#accordionExample"
                                style="color: black !important;">
                                <div class="accordion-body">
                                    <!-- play single area start -->
                                    @foreach ($chapter->lessons as $lesson)
                                        <a target="__blank"
                                            @if ($lesson->content_type == 'pdf') href="{{ asset($lesson->content) }}"
                                    @else
                                        href="{{ $lesson->content }}" @endif
                                            class="d-flex justify-content-between align-items-center  mb-2">
                                            <div class="d-flex align-items-center" style="color: black !important">
                                                <i class="fa fa-check-circle me-2"></i>
                                                <span>{{ $lesson->name }}</span>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="btn btn-sm btn-primary me-2">
                                                    @if ($lesson->content_type == 'pdf')
                                                        Read PDF
                                                    @else
                                                        Watch video
                                                    @endif
                                                </span>
                                            </div>
                                        </a>
                                    @endforeach
                                    <!-- play single area end -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- course content accordion area end -->
            </div>
        </div>
    </div>
    <!-- course details-area end -->
@endsection
