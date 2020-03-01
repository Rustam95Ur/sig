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
                <p><a href="//{{$project->link}}" target="_blank">{{$project->link}}</a></p>
            </div>
            <div class="col-12">
                <h3>Thanks for Watching</h3>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end case-detail -->
@endsection
