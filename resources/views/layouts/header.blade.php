<div class="navigation-menu">
    <div class="inner">
        <div class="side-menu">
            <ul>
                <li><a href="{{route('home')}}">{{trans('header.home')}}</a></li>
                <li><a href="{{route('about')}}">{{trans('header.about')}}</a></li>
                <li><a href="{{route('cases')}}">{{trans('header.case')}}</a></li>
                <li><a href="{{route('contact')}}">{{trans('header.contact')}}</a></li>
            </ul>
        </div>
        <!-- end side-menu -->
        <div class="sides">
            <div id="map">
                <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=43.2196700,76.9156200&amp;q=Almaty+(SmartInnovationGroup)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" width="600" height="450" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- end map -->
            <figure><img src="{{asset('images/office.jp')}}g" alt="Image">
                <a href="#map" data-fancybox><img src="{{asset('images/icon-map-marker.svg')}}" alt="Image"></a>
            </figure>
        </div>
        <!-- end sides -->
        <div class="sides"><h2>{{trans('header.slogan')}}</h2>
            <address>{{trans('header.address')}}<br>
                <a href="mailto:info@smartinnovationgroup.kz">info@smartinnovationgroup.kz</a>
                <a href="tel:87717469953">8 771 746 99 53</a>
                <a href="tel:87717838759">8 771 783 87 59</a>
            </address>
        </div>
        <!-- end sides -->
    </div>
    <!-- end inner -->
</div>
<!-- end navigation-menu -->
<aside class="left-side">
    <div class="logo">
        <img src="{{asset('images/logo-symbol.png')}}" alt="Image">
    </div>
    <ul>
        <li><a href="https://www.facebook.com/smartinnovationgroup2019/" target="_blank">FACEBOOK</a></li>
        <li><a href="https://www.instagram.com/smartinnovationgroup/" target="_blank">INSTAGRAM</a></li>

    </ul>
    <a href="" class="lang-bnt">RU</a>
    <a href="#top" class="gotop"><img src="{{asset('images/icon-gotop.svg')}}" alt="Image"></a>
</aside>
<!-- end left-side -->
<header class="header">
    <nav class="navbar">
        <div class="logo"> <a href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Image"></a> </div>
        <!-- end logo -->
        <div class="phone"> T: <a href="tel:87717469953">8 771 746 99 53</a> </div>
        <!-- end phone -->
        <div class="main-menu">
            <ul>
                <li><a href="{{route('home')}}">{{trans('header.home')}}</a></li>
                <li><a href="{{route('about')}}">{{trans('header.about')}}</a></li>
                <li><a href="{{route('cases')}}">{{trans('header.case')}}</a></li>
                <li><a href="{{route('contact')}}">{{trans('header.contact')}}</a></li>
            </ul>
        </div>
        <!-- end main-menu -->
        <div class="hamburger-menu" id="hamburger-menu">
            <div class="burger">
                <svg id="burger-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                    <title>Show / Hide Navigation</title>
                    <rect class="burger-svg__base" width="50" height="50"/>
                    <g class="burger-svg__bars">
                        <rect class="burger-svg__bar burger-svg__bar-1" x="14" y="18" width="22" height="2"/>
                        <rect class="burger-svg__bar burger-svg__bar-2" x="14" y="24" width="22" height="2"/>
                        <rect class="burger-svg__bar burger-svg__bar-3" x="14" y="30" width="22" height="2"/>
                    </g>
                </svg>
            </div>
            <!-- end burger -->
        </div>
        <!-- end hamburger-menu -->
    </nav>
    <!-- end navbar -->
</header>
<!-- end header -->
