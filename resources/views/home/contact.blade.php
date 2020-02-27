@extends('layouts.app')
@section('content')
    <body>
    <header class="header">
        <div class="page-title">
            <div class="container">
                <h2>{{trans('page.contact-header')}}</h2>
            </div>
        </div>
    </header>
    <!-- end header -->
    <section class="page-header">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d372175.96387086256!2d76.66398216062525!3d43.217360079519224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836e7d16c5cbab%3A0x3d44668fad986d76!2z0JDQu9C80LDRgtGL!5e0!3m2!1sru!2skz!4v1582648726563!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <!-- end page-header -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp">
                    <h5>{{trans('contact.address')}}</h5>
                    <address>Almaty</address>
                </div>
                <!-- end col-6 -->
                <div class="col-md-4 wow fadeInUp">
                    <h5>{{trans('contact.phone')}}</h5>
                    <address>  <a href="tel:87717469953">8 771 746 99 53</a><br>
                        <a href="tel:87717838759">8 771 783 87 59</a>
                    </address>
                </div>
                <!-- end col-6 -->
                <div class="col-4 wow fadeInUp">
                    <h5>{{trans('contact.email')}}</h5>
                    <address>
                        <a href="mailto:info@smartinnovationgroup.kz">info@smartinnovationgroup.kz</a>
                    </address>
                </div>
                <!-- end col-12 -->
                <div class="col-lg-7 wow fadeInUp">
                    <div class="contact-form">
                        <h5>{{trans('contact.form')}}</h5>
                        <form id="contact" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" required>
                                <label for="name">{{trans('contact.name')}}</label>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" autocomplete="off" required>
                                <label for="phone">{{trans('contact.phone')}}</label>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off" required>
                                <label for="subject">{{trans('contact.subject')}}</label>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="message" id="message" autocomplete="off" required></textarea>
                                <label for="message">{{trans('contact.message')}}</label>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    <strong>{{trans('contact.send')}}<b></b> <i></i></strong>
                                </button>
                            </div>
                            <!-- end form-group -->
                        </form>
                        <!-- end form -->
                        <div class="form-group">
                            <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message was
                                sent successfully! We will be in touch as soon as we can.
                            </div>
                            <!-- end success -->
                            <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went wrong,
                                try refreshing and submitting the form again.
                            </div>
                            <!-- end error -->
                        </div>
                        <!-- end form-group -->
                    </div>
                    <!-- end contat-form -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
