@extends('layouts.app')
@section('content')
<header class="header">
    <div class="page-title">
        <div class="container">
            <h2>{{trans('page.about-header')}}</h2>
        </div>
    </div>
</header>
<section class="page-header">
    <div class="video-bg">
        <video src="videos/video2.mp4" loop autoplay muted></video>
    </div>
    <!-- end video-bg -->
</section>
<!-- end page-header -->
<section class="about-intro">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Agensy</h2>
                <p>Use this thread to nominate one of your items to be used in a Free File promotion between April 1 and June 30, 2019. This may include our regular month-long “Free File of the Month” promotions, the monthly Free Wordpress Themes landing page, or other initiatives run by the Envato Marketing team.</p>
            </div>
            <!-- end col-12 -->
            <div class="col-md-6">
                <p>
                    Free files are a powerful motivator for bringing new customers into ThemeForest, and serve to showcase the quality of the rest of the marketplace. Items used in these campaigns receive a significant amount of exposure, which can flow on to more people viewing your profile, portfolio, and the other items you have for sale.</p>
            </div>
            <!-- end col-6 -->
            <div class="col-md-6">
                <p>

                    Free files are a powerful motivator for bringing new customers into ThemeForest, and serve to showcase the quality of the rest of the marketplace. Items used in these campaigns receive.</p>
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end about-intro -->
<section class="main-services" data-color="dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h6>PROIT SERVICES</h6>
                    <p>We’re constantly refining our product. Adding new features.  Working to
                        help your business grow.</p>
                </div>
                <!-- end titles -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon01.svg" alt="Image">
                </figure>
                <article>
                    <span>01</span>
                    <h4>UI-UX DESIGN</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon02.svg" alt="Image">
                </figure>
                <article>
                    <span>02</span>
                    <h4>DESIGN CODING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon03.svg" alt="Image">
                </figure>
                <article>
                    <span>03</span>
                    <h4>BRANDING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon04.svg" alt="Image">
                </figure>
                <article>
                    <span>04</span>
                    <h4>MARKETTING</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon05.svg" alt="Image">
                </figure>
                <article>
                    <span>05</span>
                    <h4>IOS APPS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon06.svg" alt="Image">
                </figure>
                <article>
                    <span>06</span>
                    <h4>CUSTOM CMS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon07.svg" alt="Image">
                </figure>
                <article>
                    <span>07</span>
                    <h4>JAVA APPS</h4>
                </article>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure class="wow fadeinUp"> <img src="images/icon08.svg" alt="Image">

                </figure>
                <article>
                    <span>08</span>
                    <h4>eCOMMERCE</h4>
                </article>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end main-services -->
<section class="our-awards">
    <div class="container">
        <div class="titles">
            <h6>AWARDS & PRIZES</h6>
            <p>We’re constantly refining our product. Adding new features.  Working to
                help your business grow.</p>
        </div>
        <!-- end titles -->
        <ul>
            <li class="wow fadeInUp" data-wow-delay="0s">
                <figure><img src="images/awards01.png" alt="Image"></figure>
                <h5>CSS Design Award</h5>
                <small>Site of the day</small> <span class="odometer" data-count="4" data-status="yes">0</span> </li>
            <li class="wow fadeInUp" data-wow-delay="0.05s">
                <figure><img src="images/awards02.png" alt="Image"></figure>
                <h5>FWA Award</h5>
                <small>Honorable Mention</small> <span class="odometer" data-count="9" data-status="yes">0</span> </li>
            <li class="wow fadeInUp" data-wow-delay="0.10s">
                <figure><img src="images/awards03.png" alt="Image"></figure>
                <h5>Web Design Award</h5>
                <small>Selected Web</small> <span class="odometer" data-count="6" data-status="yes">0</span> </li>
            <li class="wow fadeInUp" data-wow-delay="0.15s">
                <figure><img src="images/awards04.png" alt="Image"></figure>
                <h5>W3 Award</h5>
                <small>Site of the day</small> <span class="odometer" data-count="2" data-status="yes">0</span> </li>
            <li class="wow fadeInUp" data-wow-delay="0.20s">
                <figure><img src="images/awards05.png" alt="Image"></figure>
                <h5>CSS Awwwards</h5>
                <small>Web of week</small> <span class="odometer" data-count="7" data-status="yes">0</span> </li>
        </ul>
    </div>
    <!-- end container -->
</section>
<!-- end our-awards -->
<section class="team" data-color="dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titles">
                    <h6>TEAM MEMBERS</h6>
                    <p>We’re constantly refining our product. Adding new features.  Working to
                        help your business grow.</p>
                </div>
                <!-- end titles -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-6">
                <figure>
                    <img src="images/team01.jpg" alt="Image">
                    <figcaption>
                        <h5>Sasha O'Kharin</h5>
                        <span>Freelance Creative Developer</span>
                        <a href="#">Linkedin</a>
                    </figcaption>
                </figure>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure>
                    <img src="images/team02.jpg" alt="Image">
                    <figcaption>
                        <h5>Oleg Pachorski</h5>
                        <span>Freelance Creative Developer</span>
                        <a href="#">Linkedin</a>
                    </figcaption>
                </figure>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure>
                    <img src="images/team03.jpg" alt="Image">
                    <figcaption>
                        <h5>Alex Avdeivva</h5>
                        <span>Freelance Creative Developer</span>
                        <a href="#">Linkedin</a>
                    </figcaption>
                </figure>
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                <figure>
                    <img src="images/team04.jpg" alt="Image">
                    <figcaption>
                        <h5>Andrey Kolbasin</h5>
                        <span>Freelance Creative Developer</span>
                        <a href="#">Linkedin</a>
                    </figcaption>
                </figure>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end team -->
<section class="logos">
    <div class="container">
        <div class="titles">
            <h6>SELECTED CLIENTS</h6>
            <p>We’re constantly refining our product. Adding new features.  Working to
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
@endsection
