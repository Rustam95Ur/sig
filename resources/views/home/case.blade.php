@extends('layouts.app')
@section('content')
<!-- end left-side -->
<header class="header">
    <!-- end navbar -->
    <div class="page-title">
        <div class="container">
            <h2>{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</h2>
        </div>
        <!-- end container -->
    </div>
    <!-- end page-title -->
</header>
<!-- end header -->
<section class="page-header">
    <figure>
        <img class='case-image' src="{{Voyager::image($project->image)}}" alt="{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}">
    </figure>
</section>
<!-- end page-header -->
<section class="case-detail">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-8">
                <h5>{{trans('case.description')}}</h5>
                <p>{{$project->getTranslatedAttribute('body', $locale, 'fallbackLocale')}}</p>
            </div>
            <!-- end col-6 -->
            <div class="col-md-6">
                <h6>{{trans('case.link')}}</h6>
                <p><a href="//{{$project->link}}" target="_blank">Смотреть сайт</a></p>
            </div>
            <div class="col-12 side-menu">
                <h6>Понравился сайт? Хочешь такой же?</h6>
                <ul>
                    <li><a href="tel:87717469953">+7 771 746 99 53</a></li>
                    <li><a href="https://www.instagram.com/smartinnovationgroup/" target="_blank">INSTAGRAM</a></li>
                </ul>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end case-detail -->
@endsection
