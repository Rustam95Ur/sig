@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="headlines">
            <div class="container">
                <h2>{{trans('page.home-header')}}</h2>
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
                            <h2>{{$slider->text}}</h2>
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
                                    <img src="{{Voyager::image($project->image)}}" alt="{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}"></a>
                            </figure>
                            <div class="project-content">
                                <h3><a href="{{route('cases')}}"
                                       data-fancybox>{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a>
                                </h3>
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
                        <h6>{{trans('home.platforms-header')}}</h6>
                        <p>{{trans('home.platforms-text')}}</p>
                    </div>
                    <!-- end titles -->
                </div>
                <!-- end col-12 -->
                @foreach($platforms as $platform)
                    <div class="col-lg-3 col-md-6">
                        <figure class="reveal-effect masker wow"><img src="/storage/ . {{ json_decode($platform->image)[0]->download_link}}. " alt="">
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
    <section class="showreel">
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
    <section class="our-awards" data-color="dark">
        <div class="container">
            <div class="titles">
                <h6>{{trans('home.project-count')}}</h6>
            </div>
            <!-- end titles -->
            <ul>
                @foreach($platforms as $platform)
                    <li class="wow fadeInUp" data-wow-delay="0s">
                        <figure><img src="{{Voyager::image($platform->image)}}" alt=""></figure>
                        <h5>{{$platform->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h5>
                        <span class="odometer" data-count="{{count($platform->projects)}}" data-status="yes">0</span>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- end container -->
    </section>
    <!-- end our-awards -->
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
            <p><a href="#">hire-us@smartinnovationgroup.kz</a></p>
            <p><a href="tel:87717469953">8 771 746 99 53</a></p>
            <p><a href="tel:87717838759">8 771 783 87 59</a></p>
        </div>
        <!-- end container -->
    </section>
    <!-- end work-with-us -->
@endsection
