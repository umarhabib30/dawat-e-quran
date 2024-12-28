@extends('user.layouts.app')
@section('content')
<div class="container-fluid team py-3">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">

            <h1 class="display-3">About Organization</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-xl-5">
                <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/user/img/about-2.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                    <h1>Mrs. Ayesha Shahzad</h1>
                    <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                    <p class="mb-4">Dawat-e-Quran international accadmy was established in
                        14 November 2021.It's start a smalll whtsapp group and few team members Staring course details maximum 2 or 3. Now become a small group a biggest accadmy. It's head office in Saudi Arabia and it's accadmy Founder Mrs Ayesha Shahzad. This accadmy provided all course free of cost provided Walid degree accadmy has been working in national and international Level. Students ratio 500+ and team members 20+ accadmy presented wew Course's in differen Islamic subjects with famous scholar's classes. Today accadmy officially Published first recorded book of this prospects. Allhumdulliah Allah almighty.
                        <br> May Allah bless accadmy More success in world. Ameen!</p>
                    <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary mt-5">
                        <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-lg-square me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary btn-lg-square me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary btn-lg-square"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
