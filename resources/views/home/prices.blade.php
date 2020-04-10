@extends('layouts.app')
@section('content')
    <style>
        .btn-primary{
            background-color: #0062E6;
        }
    </style>
    <header class="header">
        <div class="page-title" style="margin-bottom: 0px">
            <div class="container">
               <h2>Цены</h2>
            </div>
        </div>
    </header>

    <section class="case-detail">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <section class="pricing py-5">
                        <div class="container">
                            <div class="row">
                                <!-- Free Tier -->
                                <div class="col-lg-4">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Landing Page</h5>
                                            <h6 class="card-price text-center">от 70 000<span class="period">/от 15 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Landing Page">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Сайт визитка</h5>
                                            <h6 class="card-price text-center">от 100 000<span class="period">/от 20 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Сайт визитка">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Сайт каталог</h5>
                                            <h6 class="card-price text-center">от 200 000<span class="period">/от 20 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Сайт каталог">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Plus Tier -->
                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Интернет магазин</h5>
                                            <h6 class="card-price text-center">от 300 000<span class="period">/от 30 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Интернет магазин">Хочу!</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pro Tier -->
                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Корпоративный сайт</h5>
                                            <h6 class="card-price text-center">от 200 000<span class="period">/от 20 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Корпоративный сайт">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Мобильное приложение</h5>
                                            <h6 class="card-price text-center">от 300 000<span class="period">/от 30 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Мобильное приложение">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">SMM-Продвижение</h5>
                                            <h6 class="card-price text-center">от 30 000<span class="period">/неделя</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="SMM-Продвижение">Хочу!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">DevOps - outsource</h5>
                                            <h6 class="card-price text-center">от 300 000<span class="period">/от 30 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="DevOps - outsource">Хочу!</button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4" style="margin-top: 15px">
                                    <div class="card mb-5 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title text-muted text-uppercase text-center">Многостраничные сайты</h5>
                                            <h6 class="card-price text-center">от 200 000<span class="period">/от 20 дней</span></h6>
                                            <hr>
                                            <button type="button" class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#exampleModal" data-whatever="Многостраничные сайты">Хочу!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Предварительный заказ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ url('/send-order') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Услуга:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Ваш номер:</label>
                            <input name="phone" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Что необходимо:</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
                        </div>
                        <hr>
                        <input type="submit" class="btn btn-block btn-primary text-uppercase">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection