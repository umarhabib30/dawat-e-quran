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
