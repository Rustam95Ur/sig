<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="career wow fadeInUp">
                    <h6>{{trans('footer.career-agency-header')}}</h6>
                    <h2>{{trans('footer.career-agency-text')}}</h2>
                    <div class="custom-link"><a href="#">{{trans('button.join')}}</a> <span></span> <i></i>
                    </div>
                    <!-- end custom-link -->
                </div>
                <!-- end career -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 wow fadeInUp">
                <figure class="logo"> <img src="{{asset('images/logo.png')}}" alt="Image"> </figure>
            </div>
            <div class="col-lg-3 social">
                <h5>Мы в социальных сетях</h5>
                <div class="social">
                    <span><a href="https://www.instagram.com/smartinnovationgroup/"><i class="fab fa-instagram fa-2x"></i></a></span>
                    <span><a href="https://www.facebook.com/smartinnovationgroup2019/"><i class="fab fa-facebook-square fa-2x"></i></a></span>
                    <span><a href="https://wa.me/77717838759?text=Здравствуйте!" target="_blank"><i class="fab fa-whatsapp-square fa-2x"></i></a></span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <h5>{{trans('footer.address')}}</h5>
                <address>
                    {{trans('header.address')}}
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp">
                <h5>{{trans('footer.contacts')}}</h5>
                <address>
                    <p><a href="mailto:dev@sigdev.kz">dev@sigdev.kz</a></p>
                    <p><a href="tel:87717469953">8 771 746 99 53</a></p>
                    <p><a href="tel:87717838759">8 771 783 87 59</a></p>
                </address>
            </div>
            <!-- end col-3 -->
            <div class="col-12 wow fadeInUp">
                <div class="sub-footer">
                    <span>© {{date('Y')}} SmartInnovationGroup - {{trans('footer.copyright')}}</span> </div>
                <!-- end sub-footer -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
