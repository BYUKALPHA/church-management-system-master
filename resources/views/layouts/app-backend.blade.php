<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Covid 19| Web Portal</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('backend/css/default/app.min.css')}}" rel="stylesheet" />
{{--    <link href="/backend/css/default/app.min.css" rel="stylesheet" />--}}
    <!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top">

<div class="container">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            Laravel
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            <li><a href="{{ url('/home') }}">Home</a></li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>


@yield('content')

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('backend/js/app.min.js')}}"></script>
<script src="{{asset('backend/js/theme/default.min.js')}}"></script>
<!-- ================== END BASE JS ================== -->

</body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/login_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2019 03:03:54 GMT -->
</html>

