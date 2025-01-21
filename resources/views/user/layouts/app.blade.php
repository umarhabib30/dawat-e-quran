<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/user/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/user/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @yield('style')
    <style>
        @media (max-width: 768px) {
            .donate {
                margin-left: 16px;
                margin-bottom: 1px;
            }
        }
    </style>
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar start -->
    <div class="container-fluid fixed-top">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-start">
                        <div class="h-100 d-inline-flex align-items-center me-4">
                            <span class="fa fa-phone-alt me-2 text-dark"></span>
                            <a href="https://wa.me/923011480664" class="text-secondary"><span>+92 301 1480664</span></a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="far fa-envelope me-2 text-dark"></span>
                            <a href="mailto:info@dawatequran12.com" class="text-secondary">
                                <span>info@dawatequran12.com</span>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-5 text-end">
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="text-body">Follow Us:</span>
                            <a class="text-dark px-2" href="https://www.facebook.com/dawatquran12?mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="text-dark px-2" href="https://whatsapp.com/channel/0029VaDIzNcGpLHVIVTcWz2e"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a class="text-dark px-2" href="https://www.youtube.com/@dawatequranwithayesha"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="text-dark px-2"
                                href="https://www.instagram.com/dawat_quran_12/profilecard/?igsh=bmNtOW4xOWlvY3Nj"><i
                                    class="fab fa-instagram"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('assets/user/logo/logo1.svg') }}" alt="" style="height: 50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav ms-lg-auto mx-xl-auto">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link @if ($active == 'home') active @endif">Home</a>
                        <a href="{{ route('about') }}"
                            class="nav-item nav-link @if ($active == 'about') active @endif">About Us</a>
                        <a href="{{ route('services') }}"
                            class="nav-item nav-link @if ($active == 'services') active @endif">Services</a>
                        <a href="{{ route('courses') }}"
                            class="nav-item nav-link @if ($active == 'courses') active @endif">Courses</a>
                        <a href="{{ route('instructors') }}"
                            class="nav-item nav-link @if ($active == 'instructors') active @endif">Instructors</a>
                        <a href="{{ route('contact.us') }}"
                            class="nav-item nav-link @if ($active == 'contact') active @endif">Contact Us</a>
                    </div>
                    <div class="d-flex ml-3 mb-3 mt-3 mt-lg-0">
                        <a href="{{ route('donate') }}" class="btn btn-primary py-2 donate px-2">Donate</a>
                    </div>
                </div>
            </nav>
        </div>



    </div>
    <!-- Topbar End -->


    <!-- Hero Start -->
    <div class="container-fluid hero-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-header-inner animated zoomIn">
                        <h1 class="display-1 mb-5 " style="color: #603D2F !important">{{ $title }}</h1>
                        <ol class="breadcrumb mb-0">
                            @foreach ($breadcrumbs as $key => $link)
                                <li class="breadcrumb-item text-dark"><a
                                        href="{{ route($key) }}">{{ $link }}</a></li>
                            @endforeach
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item text-dark" aria-current="page">About</li> --}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    @yield('content')
    @include('sweetalert::alert')


    <!-- Footer Start -->
    <div class="container-fluid footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row g-4 footer-inner">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-3">
                        <img src="{{ asset('assets/user/logo/logo.svg') }}" style="height: 120px" alt="">
                        {{-- <p class="mb-4 text-secondary">Nostrud exertation ullamco labor nisi aliquip ex ea commodo
                            consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p> --}}
                        {{-- <a href="" class="btn btn-primary py-2 px-4 mt-3">Donate Now</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-3">
                        <h4 class="text-light mb-4">Our Address</h4>
                        <div class="d-flex flex-column">

                            <div class="d-flex align-items-center  py-4">
                                <span class="flex-shrink-0 btn-square bg-primary me-3 p-4"><i
                                        class="fa fa-map-marker-alt text-dark"></i></span>
                                <a href="" class="text-body">Prince Metib Street, Al
                                    mirqab Al Jubail 35547</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-3">
                        <h4 class="text-light mb-4">Our Mobile</h4>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center py-4">
                                <span class="flex-shrink-0 btn-square bg-primary me-3 p-4">
                                    <i class="fa fa-phone-alt text-dark"></i>
                                </span>
                                <a href="https://wa.me/923011480664" class="text-body" target="_blank">
                                    +92 301 1480664 <br> +92 311 1630343
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item mt-3">
                        <h4 class="text-light mb-4">Explore Link</h4>
                        <div class="h-100 d-inline-flex align-items-center mt-4" bis_skin_checked="1">
                            <span class="text-body ">Follow Us:</span>
                            <a target="__blank" class=" px-2"
                                href="https://www.facebook.com/dawatquran12?mibextid=ZbWKwL"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a target="__blank" class=" px-2"
                                href="https://youtube.com/@dawatequranwithayesha?si=h-dPBPXPCGj_knpl"><i
                                    class="fab fa-youtube"></i></a>
                            <a target="__blank" class=" px-2"
                                href="https://whatsapp.com/channel/0029VaDIzNcGpLHVIVTcWz2e"><i
                                    class="fab fa-whatsapp"></i></a>
                            <a target="__blank" class=" px-2"
                                href="https://www.instagram.com/dawat_quran_12/profilecard/?igsh=bmNtOW4xOWlvY3Nj"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <div class="border-top border-secondary pb-4"></div>
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="{{ route('home') }}">Dawat-e-Quran</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    {{-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-light back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/user/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/user/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/user/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/user/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/user/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
