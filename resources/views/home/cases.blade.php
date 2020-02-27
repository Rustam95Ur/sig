@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="page-title">
            <div class="container">
                <h2>{{trans('page.cases-header')}}</h2>
            </div>
            <!-- end container -->
        </div>
        <!-- end page-title -->
    </header>
    <!-- end header -->
    <section class="page-header">
        <figure>
            <img src="{{asset('images/banner/case-bg.jpg')}}" alt="Case banner">
        </figure>
    </section>
    <!-- end page-header -->
    <section class="works">
        <div class="container">
            <ul>
                <li>
                    <div class="title">
                        <h2>{{trans('case.explore-all')}}</h2>
                    </div>
                    <!-- end title -->
                </li>
                @foreach($projects as $project)
                    <li>
                        <div class="project-box">
                            <figure class="project-image reveal-effect masker wow">
                                <a href="{{route('case', $project->id)}}">
                                    <img src="{{Voyager::image($project->image)}}" alt="{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}">
                                </a>
                            </figure>
                            <div class="project-content">
                                <h3><a href="{{route('case', $project->id)}}">{{$project->getTranslatedAttribute('title', $locale, 'fallbackLocale')}}</a></h3>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="offset-4">
                    {{$projects->links()}}

                </div>
            </div>
        </div>
    </section>
    <!-- end works -->
@endsection
