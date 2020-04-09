@extends('layouts.app')
@section('content')
    <header class="header">
        <div class="page-title" style="margin-bottom: 0px">
            <div class="container">
                <h2>Спасибо!</h2>
            </div>
        </div>
    </header>

    <section class="case-detail">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                   <h1>{{ $success }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection