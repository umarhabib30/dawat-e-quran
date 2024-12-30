<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href=""><img class="logo-img"
                        src="{{ asset('assets/user/logo/logo1.svg') }}" alt="logo" height="150px"></a><span
                    class="splash-description"></span></div>
            <div class="card-body">
                <form action="{{ route('admin.login') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="Email" type="text" name="email"
                            placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password"
                            placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>
