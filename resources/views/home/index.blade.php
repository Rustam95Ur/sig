@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="headlines">
            <div class="container">
                <h1>{{trans('page.home-header')}}</h1>
            </div>
            <!-- end container -->
        </div>
    </header>
    <section class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide" data-background="{{Voyager::image($slider->image)}}">
                        <div class="slide-inner">
                            <h2>Space in typographical terms is usually</h2>
                            <div class="link">
                                <a href="{{route('cases')}}">{{trans('button.see-case')}}</a>
                            </div>
                            <!-- end link -->
                        </div>
                        <!-- end slide-inner -->
                    </div>
                @endforeach
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
            <div class="swiper-button-next"><span></span><b>NEXT</b></div>
            <!-- end swiper-button-next -->
        </div>
        <!-- end swiper-container -->
    </section>
    <!-- end slider -->
    <section class="works">
        <div class="container">
            <ul>
                <li>
                    <div class="titles">
                        <h2>{{trans('home.recent-works-header')}}</h2>
                        <p>{{trans('home.recent-works-text')}}</p>
                        <div class="custom-btn"><a href="{{route('home')}}">{{trans('button.see-case')}}<span></span>
                                <i></i></a></div>
                        <!-- end custom-btn -->
                    </div>
                    <!-- end titles -->
                </li>
                @foreach($projects as $project)
                <li>
                    <div class="project-box">
                        <figure class="project-image reveal-effect masker wow">
                            <a href="{{Voyager::image($project->image)}}" data-fancybox>
                                <img src="{{Voyager::image($project->image)}}" alt="Image"></a>
                        </figure>
                        <div class="project-content">
                            <h3><a href="{{route('cases')}}" data-fancybox>{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></h3>
                            <small>{{$project->platform->title}}</small>
                        </div>
                        <!-- end project-content -->
                    </div>
                    <!-- end project-box -->
                </li>
                @endforeach
            </ul>
        </div>
        <!-- end container -->
    </section>
    <!-- end works -->
    <section class="featured-services" data-color="dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titles">
                        <h6>FEATURED SERVICES</h6>
                        <p>We’re constantly refining our product. Adding new features. Working to
                            help your business grow.</p>
                    </div>
                    <!-- end titles -->
                </div>
                <!-- end col-12 -->
                @foreach($platforms as $platform)
                <div class="col-lg-3 col-md-6">
                    <figure class="reveal-effect masker wow"><img src="{{Voyager::image($platform->image)}}" alt="">
                        <figcaption>
                            <span>{{$platform->id}}</span>
                            <h4>{{$platform->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h4>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end recent-news -->
    <section class="our-awards">
        <div class="container">
            <div class="titles">
                <h6>AWARDS & PRIZES</h6>
                <p>We’re constantly refining our product. Adding new features. Working to
                    help your business grow.</p>
            </div>
            <!-- end titles -->
            <ul>
                <li class="wow fadeInUp" data-wow-delay="0s">
                    <figure><img src="images/awards01.png" alt="Image"></figure>
                    <h5>CSS Design Award</h5>
                    <small>Site of the day</small>
                    <span class="odometer" data-count="5" data-status="yes">0</span></li>
                <li class="wow fadeInUp" data-wow-delay="0.05s">
                    <figure><img src="images/awards02.png" alt="Image"></figure>
                    <h5>FWA Award</h5>
                    <small>Honorable Mention</small>
                    <span class="odometer" data-count="9" data-status="yes">0</span></li>
                <li class="wow fadeInUp" data-wow-delay="0.10s">
                    <figure><img src="images/awards03.png" alt="Image"></figure>
                    <h5>Web Design Award</h5>
                    <small>Selected Web</small>
                    <span class="odometer" data-count="6" data-status="yes">0</span></li>
                <li class="wow fadeInUp" data-wow-delay="0.15s">
                    <figure><img src="images/awards04.png" alt="Image"></figure>
                    <h5>W3 Award</h5>
                    <small>Site of the day</small>
                    <span class="odometer" data-count="2" data-status="yes">0</span></li>
                <li class="wow fadeInUp" data-wow-delay="0.20s">
                    <figure><img src="images/awards05.png" alt="Image"></figure>
                    <h5>CSS Awwwards</h5>
                    <small>Web of week</small>
                    <span class="odometer" data-count="7" data-status="yes">0</span></li>
            </ul>
        </div>
        <!-- end container -->
    </section>
    <!-- end our-awards -->
    <section class="showreel" data-color="dark">
        <div class="container">
            <div class="video reveal-effect masker wow">
                <video src="videos/video.mp4" autoplay loop muted></video>
                <h2>SHOWREEL</h2>
                <!-- end content -->
            </div>
            <!-- end video -->
        </div>
        <!-- end container -->
    </section>
    <!-- end showreel -->
    <section class="logos">
        <div class="container">
            <div class="titles">
                <h6>SELECTED CLIENTS</h6>
                <p>We’re constantly refining our product. Adding new features. Working to
                    help your business grow.</p>
            </div>
            <!-- end titles -->
            <ul class="wow fadeInUp">
                <li>
                    <figure><img src="images/logo01.png" alt="Image">
                        <img src="images/logo05.png" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure><img src="images/logo02.png" alt="Image">
                        <img src="images/logo15.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo03.png" alt="Image">
                        <img src="images/logo12.png" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure><img src="images/logo04.png" alt="Image">
                        <img src="images/logo11.png" alt="Image">
                    </figure>
                </li>
                <li>
                    <figure><img src="images/logo05.png" alt="Image">
                        <img src="images/logo06.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo06.png" alt="Image">
                        <img src="images/logo02.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo07.png" alt="Image">
                        <img src="images/logo07.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo08.png" alt="Image">
                        <img src="images/logo13.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo09.png" alt="Image">
                        <img src="images/logo16.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo10.png" alt="Image">
                        <img src="images/logo15.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo11.png" alt="Image">
                        <img src="images/logo01.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo12.png" alt="Image">
                        <img src="images/logo06.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo13.png" alt="Image">
                        <img src="images/logo04.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo14.png" alt="Image">
                        <img src="images/logo11.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo15.png" alt="Image">
                        <img src="images/logo10.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo04.png" alt="Image">
                        <img src="images/logo12.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo05.png" alt="Image">
                        <img src="images/logo08.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo06.png" alt="Image">
                        <img src="images/logo03.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo07.png" alt="Image">
                        <img src="images/logo02.png" alt="Image"></figure>
                </li>
                <li>
                    <figure><img src="images/logo08.png" alt="Image">
                        <img src="images/logo10.png" alt="Image"></figure>
                </li>
            </ul>
        </div>
        <!-- end container -->
    </section>
    <!-- end logos -->
    <section class="work-with-us" data-color="dark">
        <div class="container wow fadeInUp">
            <h6>WORK WITH PRO TEAM</h6>
            <h2>Would you like to have professional project?
                Let's talk about it!</h2>
            <p><a href="#">hire-us@agensy.com.ua</a></p>
            <small>Or</small>
            <p>+380 98 294 80 85</p>
        </div>
        <!-- end container -->
    </section>
    <!-- end work-with-us -->
@endsection
