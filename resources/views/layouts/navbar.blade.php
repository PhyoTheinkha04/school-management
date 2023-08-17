<!-- navication start -->

<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>



    </ul>
</div>

<header class="header">

    <div class="container">
        <div class="pc">
            <ul class="langauge">
                <li><a href="{{url('/mm')}}"><img src="img/mm.png"></a></li>
                <li><a href="{{url('/ja')}}"><img src="img/Japan.png"></a></li>
                <li><a href="{{url('/')}}"><img src="img/uk.png"></a></li>
            </ul>
            <ul class="nav_items">
                <li class="nav"><a href="{{url('/')}}" class="link1 @if (isset($respond) && $respond['active'] == 'home')
                    active
                @endif ">{{ __('message.home') }}</a></li>
                <li class="nav"><a href="{{ route('about', ['locale' => $locale]) }}" class="link1 @if (isset($respond) && $respond['active'] == 'about')
                    active
                @endif ">{{ __('message.aboutus') }}</a></li>
                <li class="nav"><a href="#" class="link1 @if (isset($respond) && $respond['active'] == 'course')
                    active
                @endif ">{{ __('message.courses') }}</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('local', ['locale' => $locale]) }}">{{ __('message.local') }}</a></li>
                        <li><a href="{{ route('online', ['locale' => $locale]) }}">{{ __('message.online') }}</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="{{ route('news', ['locale' => $locale]) }}" class="link1 @if (isset($respond) && $respond['active'] == 'news')
                    active
                @endif ">{{ __('message.news') }}</a></li>
                <li class="nav"><a href="{{url('/contact')}}" class="link1 white">{{ __('message.contact') }}</a></li>
                <li class="nav"><a href="{{url('/faq')}}" class="link1 white">{{ __('message.faq') }}</a></li>
                <img src="img/edu1.png" class="head">
            </ul>
        </div>
        <div class="sp">
            <ul class="nav_items">
                <li class="nav">
                    <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go"></a>
                    <div class="headerTxt sp">
                        <p class="txt1">{{ __('message.faq') }}</p>
                        <p class="txt1">{{ __('message.faq') }}</p>
                        <p class="txt2 margin">{{ __('message.faq') }}</p>
                    </div>
                </li>
                <img src="img/edu1.png" class="head">
                <div class="classnav">
                    <div class="menu-btn1">
                        <div class="line line--1"></div>
                        <div class="line line--2"></div>
                        <div class="line line--3"></div>
                    </div>
                    <nav>
                        <div class="nav-menulinks">
                            <ul class="nav_menuitems sp">
                                <li class="nav"><a href="index-uk.html" class="link1 active">Home</a></li>
                                <li class="nav"><a href="/about" class="link1">About Us</a></li>
                                <li class="nav"><a href="#" class="link1">Courses</a>
                                    <ul class="dropdown">
                                        <li><a href="local-uk.html">Local Classroom</a></li>
                                        <li><a href="online-uk.html">Online Class</a></li>
                                    </ul>
                                </li>

                                <li class="nav"><a href="news-uk.html" class="link1">News</a></li>
                                <li class="nav"><a href="contact-uk.html" class="link1 white">Contact Us</a></li>
                                <li class="nav"><a href="faq-uk.html" class="link1 white">FAQ</a></li>
                                <li class="nav">
                                    <button class="loginbtn2">
                                        <span class="shadow"></span>
                                        <span class="edge"></span>
                                        <span class="front text"> Click me</span>
                                    </button>
                                </li>
                                <ul class="langauge">
                                    <li><a href=""><img src="img/mm.png"></a></li>
                                    <li>
                                        <a href=""><img src="img/Japan.png"></a>
                                    </li>
                                    <li><a href=""><img src="img/uk.png"></a></li>
                                </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </ul>
        </div>

    </div>

