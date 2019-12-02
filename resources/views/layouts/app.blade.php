<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#282828"/>
    <title>{{Voyager::setting('site.title')}}</title>
    <!-- FAVICON FILES -->

    <link href="{{asset('ico/favicon.png')}}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="preloader">
    <div class="inner">
        <figure class="logo"><img src="{{asset('images/logo-light.png')}}" alt="Image"></figure>
        <span class="percentage"></span>
    </div>
    <!-- end inner -->
</div>
<!-- end preloader -->
<div class="transition-overlay"></div>
<!-- end transition-overlay -->
@include('layouts.header')
@yield('content')
@include('layouts.footer')

<!-- end footer -->
<audio id="hamburger-hover" src="audio/link.mp3" preload="auto"></audio>

<!-- JS FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src='js/TweenMax.min.js'></script>
<script src='js/odometer.min.js'></script>
<script src='js/fancybox.min.js'></script>
<script src='js/wow.min.js'></script>
<script src='js/scripts.js'></script>


</body>
</html>
