<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163207360-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163207360-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="{{Voyager::setting('site.description')}}">
    <meta name="keywords" content="разработка сайтов алматы,разработка, сайт, приложение, smm, landing page, интернет магазин, мобильные приложения, IT решения, бизнес">
    <meta name="author" content="Pelivan Eduard">
    <title>{{Voyager::setting('site.title')}}</title>
    <!-- FAVICON FILES -->

    <link href="{{asset('images/logo-symbol.png')}}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>
<div class="preloader">
    <div class="inner">
        <figure class="logo"><img src="{{asset('images/logo.png')}}" alt="Image"></figure>
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
<audio id="hamburger-hover" src="{{asset('audio/link.mp3')}}" preload="auto"></audio>
<!-- JS FILES -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/isotope.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src='{{asset('js/TweenMax.min.js')}}'></script>
<script src='{{asset('js/odometer.min.js')}}'></script>
<script src='{{asset('js/fancybox.min.js')}}'></script>
<script src='{{asset('js/wow.min.js')}}'></script>
<script src='{{asset('js/scripts.js')}}'></script>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body input[id=name]').val(recipient)
    })
</script>
</body>
</html>
