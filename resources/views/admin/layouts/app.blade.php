<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link href="{{ asset('assets/admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendor/datatables/css/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendor/datatables/css/buttons.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendor/datatables/css/select.bootstrap4.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendor/datatables/css/fixedHeader.bootstrap4.css') }}" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>{{ $title }}</title>
    @yield('style')
</head>

<body>
    @include('sweetalert::alert')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="{{ asset('assets/admin/images/avatar-1.jpg') }}" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                                aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="{{route('admin.logout')}}"><i
                                        class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link @if ($active == 'dashboard') active @endif "
                                    href="{{ route('dashboard') }}"><i
                                        class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                        class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link @if ($active == 'category') active @endif " href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-1"
                                    aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Category <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('category.create') }}">Add
                                                Category</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('category.index') }}">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'course') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
                                    aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Course</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('course.create') }}">Add
                                                Course</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('course.index') }}">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'instructor') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                                    aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>Instructor</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('instructor.create') }}">Add  Instructor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('instructor.index') }}">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link @if ($active == 'color') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-4"
                                    aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i>Color</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('color.create') }}">Add Color</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('color.index') }}">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'seat') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-8"
                                    aria-controls="submenu-8"><i class="fa fa-fw fa-rocket"></i>Seat Number</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seat.create') }}">Add Seat Number</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('seat.index') }}">All Seat Number</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'stuff') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-9"
                                    aria-controls="submenu-9"><i class="fa fa-fw fa-rocket"></i>Stuff</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('stuff.create') }}">Add Stuff</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('stuff.index') }}">All Stuff</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'size') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-10"
                                    aria-controls="submenu-10"><i class="fa fa-fw fa-rocket"></i>Sizes</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('size.create') }}">Add size</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('size.index') }}">All sizes</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'product') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                                    aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Products</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('product.create') }}">Add Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin.products') }}">View All</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'order') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-5"
                                    aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Order</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">All Order</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'contact') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-6"
                                    aria-controls="submenu-6"><i class="fa fa-fw fa-rocket"></i>Contact</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">All Messages</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'user') active @endif" href="#"
                                    data-toggle="collapse" aria-expanded="false" data-target="#submenu-7"
                                    aria-controls="submenu-7"><i class="fa fa-fw fa-rocket"></i>User</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">All Users</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}



                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="{{ asset('assets/admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/js/main-js.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/datatables/js/data-table.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

    @yield('script')
</body>

</html>
