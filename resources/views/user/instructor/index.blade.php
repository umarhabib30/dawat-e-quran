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
                <div class="col-lg-6 col-xl-4">
                    <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="overflow-hidden p-4 pb-0">
                            <img src="{{ asset('assets/user/img/sermon-1.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="p-4">

                            <a href="" class="d-inline-block h4 lh-sm mb-3">Name of member</a>
                            <small>(Role of member) </small>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sermon End -->
@endsection
