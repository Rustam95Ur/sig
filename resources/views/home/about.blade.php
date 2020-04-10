@extends('layouts.app')
@section('content')
<header class="header">
    <div class="page-title">
        <div class="container">
            <h2>{{trans('page.about-header')}}</h2>
        </div>
    </div>
</header>
<section class="page-header">
    <div class="video-bg">
        <img src="../../../images/banner/about.jpg" alt="about">
    </div>
    <!-- end video-bg -->
</section>
<!-- end page-header -->
<section class="about-intro">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>SMARTINNOVATIONGROUP</h2>
                <p>{{trans('about.about-us')}}</p>
            </div>
            {{--<!-- end col-12 -->--}}
            {{--<div class="col-md-6">--}}
                {{--<p>--}}
                    {{--Free files are a powerful motivator for bringing new customers into ThemeForest, and serve to showcase the quality of the rest of the marketplace. Items used in these campaigns receive a significant amount of exposure, which can flow on to more people viewing your profile, portfolio, and the other items you have for sale.</p>--}}
            {{--</div>--}}
            {{--<!-- end col-6 -->--}}
            {{--<div class="col-md-6">--}}
                {{--<p>--}}

                    {{--Free files are a powerful motivator for bringing new customers into ThemeForest, and serve to showcase the quality of the rest of the marketplace. Items used in these campaigns receive.</p>--}}
            {{--</div>--}}
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end about-intro -->
<section class="main-services" data-color="dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h6>{{trans('about.our-services')}}</h6>
                    <p>{{trans('about.our-services-description')}}</p>
                </div>
                <!-- end titles -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon01.svg" alt="Image">
                </figure>
                <article>
                    <span>01</span>
                    <h4>UI-UX DESIGN</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon02.svg" alt="Image">
                </figure>
                <article>
                    <span>02</span>
                    <h4>DESIGN CODING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon03.svg" alt="Image">
                </figure>
                <article>
                    <span>03</span>
                    <h4>BRANDING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon04.svg" alt="Image">
                </figure>
                <article>
                    <span>04</span>
                    <h4>MARKETTING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon05.svg" alt="Image">
                </figure>
                <article>
                    <span>05</span>
                    <h4>IOS APPS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon06.svg" alt="Image">
                </figure>
                <article>
                    <span>06</span>
                    <h4>CUSTOM CMS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon07.svg" alt="Image">
                </figure>
                <article>
                    <span>07</span>
                    <h4>JAVA APPS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon08.svg" alt="Image">

                </figure>
                <article>
                    <span>08</span>
                    <h4>eCOMMERCE</h4>
                </article>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end main-services -->
{{--<section class="our-awards">--}}
    {{--<div class="container">--}}
        {{--<div class="titles">--}}
            {{--<h6>AWARDS & PRIZES</h6>--}}
            {{--<p>We’re constantly refining our product. Adding new features.  Working to--}}
                {{--help your business grow.</p>--}}
        {{--</div>--}}
        {{--<!-- end titles -->--}}
        {{--<ul>--}}
            {{--<li class="wow fadeInUp" data-wow-delay="0s">--}}
                {{--<figure><img src="images/awards01.png" alt="Image"></figure>--}}
                {{--<h5>CSS Design Award</h5>--}}
                {{--<small>Site of the day</small> <span class="odometer" data-count="4" data-status="yes">0</span> </li>--}}
            {{--<li class="wow fadeInUp" data-wow-delay="0.05s">--}}
                {{--<figure><img src="images/awards02.png" alt="Image"></figure>--}}
                {{--<h5>FWA Award</h5>--}}
                {{--<small>Honorable Mention</small> <span class="odometer" data-count="9" data-status="yes">0</span> </li>--}}
            {{--<li class="wow fadeInUp" data-wow-delay="0.10s">--}}
                {{--<figure><img src="images/awards03.png" alt="Image"></figure>--}}
                {{--<h5>Web Design Award</h5>--}}
                {{--<small>Selected Web</small> <span class="odometer" data-count="6" data-status="yes">0</span> </li>--}}
            {{--<li class="wow fadeInUp" data-wow-delay="0.15s">--}}
                {{--<figure><img src="images/awards04.png" alt="Image"></figure>--}}
                {{--<h5>W3 Award</h5>--}}
                {{--<small>Site of the day</small> <span class="odometer" data-count="2" data-status="yes">0</span> </li>--}}
            {{--<li class="wow fadeInUp" data-wow-delay="0.20s">--}}
                {{--<figure><img src="images/awards05.png" alt="Image"></figure>--}}
                {{--<h5>CSS Awwwards</h5>--}}
                {{--<small>Web of week</small> <span class="odometer" data-count="7" data-status="yes">0</span> </li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    {{--<!-- end container -->--}}
{{--</section>--}}
<!-- end our-awards -->
<section class="team" data-color="dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h6>{{ trans('about.team-member') }}</h6>
                    <p>{{trans('about.team-member-description')}}</p>
                </div>
                <!-- end titles -->
            </div>
            <!-- end col-12 -->
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<figure>--}}
                    {{--<img src="images/team01.jpg" alt="Image">--}}
                    {{--<figcaption>--}}
                        {{--<h5>Sasha O'Kharin</h5>--}}
                        {{--<span>Freelance Creative Developer</span>--}}
                        {{--<a href="#">Linkedin</a>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
            {{--</div>--}}
            <!-- end col-3 -->
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<figure>--}}
                    {{--<img src="images/team02.jpg" alt="Image">--}}
                    {{--<figcaption>--}}
                        {{--<h5>Oleg Pachorski</h5>--}}
                        {{--<span>Freelance Creative Developer</span>--}}
                        {{--<a href="#">Linkedin</a>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
            {{--</div>--}}
            <!-- end col-3 -->
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<figure>--}}
                    {{--<img src="images/team03.jpg" alt="Image">--}}
                    {{--<figcaption>--}}
                        {{--<h5>Alex Avdeivva</h5>--}}
                        {{--<span>Freelance Creative Developer</span>--}}
                        {{--<a href="#">Linkedin</a>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
            {{--</div>--}}
            <!-- end col-3 -->
            {{--<div class="col-lg-3 col-md-6">--}}
                {{--<figure>--}}
                    {{--<img src="images/team04.jpg" alt="Image">--}}
                    {{--<figcaption>--}}
                        {{--<h5>Andrey Kolbasin</h5>--}}
                        {{--<span>Freelance Creative Developer</span>--}}
                        {{--<a href="#">Linkedin</a>--}}
                    {{--</figcaption>--}}
                {{--</figure>--}}
            {{--</div>--}}
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end team -->
<section class="logos">
    <div class="container">
        <div class="titles">
            <h6>{{trans('home.clients-header')}}</h6>
        </div>
        <!-- end titles -->
        <ul class="wow fadeInUp">
            @foreach($clients as $client)
                <li>
                    <figure><img src="{{Voyager::image($client->image)}}" alt="{{$client->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}">
                        <img src="{{Voyager::image($client->image)}}" alt="{{$client->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}"></figure>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- end container -->
</section>
<!-- end logos -->
<section class="work-with-us" data-color="dark">
    <div class="container wow fadeInUp">
        <h6>{{trans('home.work-with-header')}}</h6>
        <h2>{{trans('home.work-with-text')}}</h2>
        <p><a href="mailto:dev@sigdev.kz">dev@sigdev.kz</a></p>
        <p><a href="tel:87717469953">8 771 746 99 53</a></p>
        <p><a href="tel:87717838759">8 771 783 87 59</a></p>
    </div>
    <!-- end container -->
</section>
<!-- end work-with-us -->
@endsection
