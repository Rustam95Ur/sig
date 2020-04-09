@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="page-title" style="margin-bottom: 0px">
            <div class="container">
                <h2>Упс... Что то пошло не так :(</h2>
            </div>
        </div>
    </header>

    <section class="case-detail">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <h1>{{ $error }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection