<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>@yield('title')</title>
    <!--Bootstrap -->

{{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
{{--    <link rel="stylesheet" href="assets/css/style.css" type="text/css">--}}

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!--FontAwesome Font Style -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!--OWL Carousel slider-->
    <link rel="stylesheet"  href="{{asset('css/owl.carousel.css')}}">
    <!--Custome Style -->
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <!--magnific Style -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!--FontAwesome Font Style -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.{{asset(')}}')}}">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('images/favicon-icon/apple-touch-icon-114-precomposed.html')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon-icon/favicon.png')}}">
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="preloader-wrap" id="preloader-wrap">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>

<!-- Header -->
<header id="header" class="nav-stacked sa-header" data-spy="affix" data-offset-top="1">
    <!-- Header-top -->

            @include('layouts.Header-top')

    <!-- /Header-top -->

    <!-- Navigation -->
    @include('layouts.navigation')


    <!-- Navigation end -->
</header>
<!-- /Header -->




    @yield('content')





<!-- Footer-Bottom -->
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2020  All Rights Reserved</p>
            </div>
            <div class="col-md-2">
                <div id="back-top" class="back-top">
                    <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer_links">
                    <a href="{{'/'}}">Home</a>
                    <a href="">About Us</a>
                    <a href="{{route('contact-us')}}">Contact us</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Footer-Bottom -->

<!-- /Footer -->
<!-- Theme skins -->


<!-- Theme skins -->


<!--/ buy panel -->

<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/audio_custome.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/circle-progress.js')}}"></script>
<script src="{{asset('js/imagesloaded.min.js')}}"></script>

<!--Custome-JS-->
<script src="{{asset('js/interface.js')}}"></script>
</body>



