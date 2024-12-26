@extends('user.layouts.app')
@section('content')
    <!-- About Satrt -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 mb-5">
                <div class="col-xl-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <img src="{{ asset('assets/user/img/about-1.jpg') }}" class="img-fluid h-100 wow zoomIn"
                                data-wow-delay="0.1s" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/user/img/about-2.jpg') }}" class="img-fluid pb-3 wow zoomIn"
                                data-wow-delay="0.1s" alt="">
                            <img src="{{ asset('assets/user/img/about-3.jpg') }}" class="img-fluid pt-3 wow zoomIn"
                                data-wow-delay="0.1s" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fs-5 text-uppercase " style="color: #603D2F !important">Dawat E Quran International Academy </p>
                    <p class="pb-4">DawatQuran International Academy is a center for comprehensive Quranic education,
                        focusing on memorization, Tajweed, understanding, and interpretation.</p>
                    <div class="row g-4 mb-4">
                        <div class="col-md-12">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i
                                        class="fa fa-eye text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5 class="text-primary">Our Vision</h5>
                                    <p>To be a leading institution producing individuals who embody the Quran’s teachings,
                                        inspire positive change, and contribute to a harmonious and ethical global society.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ps-3 d-flex align-items-center justify-content-start">
                                <span class="bg-primary btn-md-square rounded-circle mt-4 me-2"><i
                                        class="fa fa-flag text-dark fa-4x mb-5 pb-2"></i></span>
                                <div class="ms-4">
                                    <h5 class="text-primary">Our Mission</h5>
                                    <p>To provide a holistic Quranic education that combines memorization, Tajweed,
                                        understanding, and interpretation while fostering Islamic values, academic
                                        excellence, self-discipline, and community engagement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="bg-light p-3 mb-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-3">
                            <img src="{{ asset('assets/user/img/about-child.jpg') }}" class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="col-6">
                            <p class="mb-0">Lorem ipsum dolor sit amet elit. Donec tempus eros vel dolor mattis aliquam. Etiam quis mauris justo.</p>
                        </div>
                        <div class="col-3">
                                <h2 class="mb-0 text-primary text-center">$20,46</h2>
                                <h5 class="mb-0 text-center">Raised</h5>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="row g-2">
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Charity & Donation</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Parent Education</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2"><i class="fa fa-check text-primary me-3"></i>Hadith & Sunnah</p>
                        <p class="mb-0"><i class="fa fa-check text-primary me-3"></i>Mosque Development</p>
                    </div>
                </div> --}}
                </div>
            </div>
            <div class="container text-center bg-primary py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-2">
                        <i class="fa fa-mosque fa-5x text-white"></i>
                    </div>
                    <div class="col-lg-10 text-center text-lg-start">
                        <center>
                            <h1 class="mb-0">Every Muslim Needs To Realise The Importance Of The "Pillar" Of Islam</h1>
                        </center>
                    </div>
                    {{-- <div class="col-lg-3">
                    <a href="" class="btn btn-light py-2 px-4">Learn More</a>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Activities Start -->
    <div class="container-fluid activities py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Aims</p>
                <h1 class="display-3" style="color: #603D2F !important">Here Are Our Aims</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-mosque fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Memorization:</h4>
                            <p class="mb-4">Learning to memorize the Quran</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-donate fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Tajweed:</h4>
                            <p class="mb-4">Learning to read the Quran with accuracy</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-quran fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Understanding:</h4>
                            <p class="mb-4">Learning to understand the Quran</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-book fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Recitation:</h4>
                            <p class="mb-4">Learning to recite the Quran in various modes</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-book-open fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Research:</h4>
                            <p class="mb-4">Learning how to conduct research on the Quran</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Interpretation:</h4>
                            <p class="mb-4">Learning how to interpret the Quran</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Communication:</h4>
                            <p class="mb-4">Learning how to communicate the Quran's teachings to others</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Academic skills: </h4>
                            <p class="mb-4">Learning academic skills such as critical reading and argumentation</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Arabic: </h4>
                            <p class="mb-4">Learning to read and use both classical and modern</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Islamic values: </h4>
                            <p class="mb-4"> Integrating Islamic values into social and moral education </p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Community: </h4>
                            <p class="mb-4"> Participating in community activities and events</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Self-discipline: </h4>
                            <p class="mb-4">Developing self-discipline and self-respect</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="activities-item p-4 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-hands fa-4x text-dark"></i>
                        <div class="ms-4">
                            <h4>Self-belief:</h4>
                            <p class="mb-4">Developing self-belief to reach goals</p>
                            {{-- <a href="" class="btn btn-primary px-3">Read More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Activities Start -->


    <!-- Events Start -->
    {{-- <div class="container-fluid event py-5">
        <div class="container py-5">
            <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Upcoming <span class="text-primary">Events</span>
            </h1>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.1s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                        <h6>01 Jan 2045</h6>
                        <p class="mb-0">Fri 06:55</p>
                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Milad Un Nabi</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                        <a href="#" class="btn btn-primary px-3">Join Now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="{{ asset('assets/user/img/events-1.jpg') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.3s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                        <h6>01 Jan 2045</h6>
                        <p class="mb-0">Wed 11:30</p>
                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Eid Ul Fitr</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                        <a href="#" class="btn btn-primary px-3">Join Now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="{{ asset('assets/user/img/events-2.jpg') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
            <div class="row g-4 event-item wow fadeIn" data-wow-delay="0.5s">
                <div class="col-3 col-lg-2 pe-0">
                    <div class="text-center border-bottom border-dark py-3 px-2">
                        <h6>01 Jan 2045</h6>
                        <p class="mb-0">Thu 11:30</p>
                    </div>
                </div>
                <div class="col-9 col-lg-6 border-start border-dark pb-5">
                    <div class="ms-3">
                        <h4 class="mb-3">Eud Ul Azha</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in </p>
                        <a href="#" class="btn btn-primary px-3">Join Now</a>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="overflow-hidden mb-5">
                        <img src="{{ asset('assets/user/img/events-3.jpg') }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Events End -->


    <!-- Sermon Start -->
    {{-- <div class="container-fluid sermon py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Sermons</p>
                <h1 class="display-3">Join The Islamic Community</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="sermon-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="overflow-hidden p-4 pb-0">
                            <img src="{{ asset('assets/user/sermon-1.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="p-4">
                            <div class="sermon-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fa fa-calendar me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">13 Nov 2023</small></a>
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted">Admin</small></a>
                                </div>
                                <div class="">
                                    <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                    <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="sermon-item wow fadeIn" data-wow-delay="0.3s">
                        <div class="overflow-hidden p-4 pb-0">
                            <img src="{{ asset('assets/user/sermon-2.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="p-4">
                            <div class="sermon-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fa fa-calendar me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">13 Nov 2023</small></a>
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted">Admin</small></a>
                                </div>
                                <div class="">
                                    <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                    <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="sermon-item wow fadeIn" data-wow-delay="0.5s">
                        <div class="overflow-hidden p-4 pb-0">
                            <img src="{{ asset('assets/user/sermon-3.jpg') }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="p-4">
                            <div class="sermon-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fa fa-calendar me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">13 Nov 2023</small></a>
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted">Admin</small></a>
                                </div>
                                <div class="">
                                    <a href="" class="me-1"><i class="fas fa-video text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-headphones text-muted"></i></a>
                                    <a href="" class="me-1"><i class="fas fa-file-alt text-muted"></i></a>
                                    <a href="" class=""><i class="fas fa-image text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Sermon End -->


    <!-- Blog Start -->
    {{-- <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-3 mb-5 wow fadeIn" data-wow-delay="0.1s">Latest From <span class="text-primary">Our
                    Blog</span></h1>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="{{ asset('assets/user/blog-1.jpg') }}" class="img-fluid w-100" alt="">
                            <div
                                class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                01 Jan 2045</div>
                        </div>
                        <div class="p-4">
                            <div class="blog-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">By Admin</small></a>
                                    <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">12 Comments</small></a>
                                </div>
                                <div class="">
                                    <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of “Piller” of Islam</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary px-3">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item wow fadeIn" data-wow-delay="0.3s">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="{{ asset('assets/user/blog-2.jpg') }}" class="img-fluid w-100" alt="">
                            <div
                                class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                01 Jan 2045</div>
                        </div>
                        <div class="p-4">
                            <div class="blog-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">By Admin</small></a>
                                    <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">12 Comments</small></a>
                                </div>
                                <div class="">
                                    <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">How to get closer to Allah</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary px-3">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item wow fadeIn" data-wow-delay="0.5s">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="{{ asset('assets/user/blog-3.jpg') }}" class="img-fluid w-100" alt="">
                            <div
                                class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                01 Jan 2045</div>
                        </div>
                        <div class="p-4">
                            <div class="blog-meta d-flex justify-content-between pb-2">
                                <div class="">
                                    <small><i class="fas fa-user me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">By Admin</small></a>
                                    <small><i class="fa fa-comment-alt me-2 text-muted"></i><a href=""
                                            class="text-muted me-2">12 Comments</small></a>
                                </div>
                                <div class="">
                                    <a href=""><i class="fas fa-bookmark text-muted"></i></a>
                                </div>
                            </div>
                            <a href="" class="d-inline-block h4 lh-sm mb-3">Importance of Hajj in Islam</a>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary px-3">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blog End -->


    <!-- Team Start -->
    {{-- <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Our Team</p>
                <h1 class="display-3">Meet Our Organizer</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-xl-5">
                    <div class="team-img wow zoomIn" data-wow-delay="0.1s">
                        <img src="{{ asset('assets/user/img/team-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-xl-7">
                    <div class="team-item wow fadeIn" data-wow-delay="0.1s">
                        <h1>Anamul Hasan</h1>
                        <h5 class="fw-normal fst-italic text-primary mb-4">President</h5>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. aliquip ex ea commodo
                            consequat.</p>
                        <div class="team-icon d-flex pb-4 mb-4 border-bottom border-primary">
                            <a class="btn btn-primary btn-lg-square me-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-lg-square me-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-lg-square me-2"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-lg-square"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.2s">
                                <img src="{{ asset('assets/user/team-2.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Mustafa Kamal</h5>
                                        <p class="text-dark">Imam</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.4s">
                                <img src="{{ asset('assets/user/team-3.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Nahiyan Momen</h5>
                                        <p class="text-dark">Teacher</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-item wow zoomIn" data-wow-delay="0.6s">
                                <img src="{{ asset('assets/user/team-4.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="team-content text-dark text-center py-3">
                                    <div class="team-content-inner">
                                        <h5 class="mb-0">Asfaque Ali</h5>
                                        <p class="text-dark">Volunteer</p>
                                        <div class="team-icon d-flex align-items-center justify-content-center">
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-primary btn-sm-square me-2" href=""><i
                                                    class="fab fa-twitter"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square me-2"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm-square"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->


    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <p class="fs-5 text-uppercase text-primary">Testimonial</p>
                <h1 class="display-3" style="color: #603D2F !important">What People Say About Islam</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.1s">
                <div class="testimonial-item">
                    <div class="d-flex mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/user/img/testimonial-1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                style="top: 25px; left: -25px;">
                                <i class="fa fa-quote-left text-dark"></i>
                            </div>
                        </div>
                        <div class="ps-3 my-auto ">
                            <h5 class="mb-0">Ahmed Ali</h5>
                            <p class="m-0">Teacher</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Alhamdulillah, this academy has transformed my understanding of the Quran and strengthened my connection to Allah.</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/user/img/g1.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                style="top: 25px; left: -25px;">
                                <i class="fa fa-quote-left text-dark"></i>
                            </div>
                        </div>
                        <div class="ps-3 my-auto ">
                            <h5 class="mb-0">Fatima Zahra</h5>
                            <p class="m-0">Doctor</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">The personalized teaching approach made learning Tajweed and memorization a joyful and rewarding experience.</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/user/img/testimonial-3.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                style="top: 25px; left: -25px;">
                                <i class="fa fa-quote-left text-dark"></i>
                            </div>
                        </div>
                        <div class="ps-3 my-auto ">
                            <h5 class="mb-0">Yusuf Karim</h5>
                            <p class="m-0">Engineer</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">Studying here has enhanced my recitation skills and deepened my appreciation for the beauty of the Quran.</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex mb-3">
                        <div class="position-relative">
                            <img src="{{ asset('assets/user/img/g2.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="btn-md-square bg-primary rounded-circle position-absolute"
                                style="top: 25px; left: -25px;">
                                <i class="fa fa-quote-left text-dark"></i>
                            </div>
                        </div>
                        <div class="ps-3 my-auto ">
                            <h5 class="mb-0">Aisha Malik</h5>
                            <p class="m-0">Homemaker</p>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="d-flex">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                        </div>
                        <p class="fs-5 m-0 pt-3">The supportive environment has helped me grow spiritually and gain confidence in my knowledge of the Quran.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testiminial End -->
@endsection
