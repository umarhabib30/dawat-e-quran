@extends('user.layouts.app')
@section('content')
       <!-- Sermon Start -->
       <div class="container-fluid sermon py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Instructors</p>
                <h1 class="display-3">Meet our Team</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($instructors as $instructor)
                <div class="col-md-3">
                    <div class="sermon-item d-flex flex-column" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="overflow-hidden p-4 pb-0">
                            <img src="{{ asset($instructor->image) }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="p-4" style="flex-grow: 1;">
                            <a href="" class="d-inline-block h4 lh-sm mb-3">{{ $instructor->name }}</a>
                            <small>({{ $instructor->role }}) </small>
                            <p class="mb-0">{{ Str::limit($instructor->intro , 200, '...') }}</p>
                        </div>
                        <a href="#" class="btn btn-primary w-100" style="margin-top: auto;">View</a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Sermon End -->
@endsection
