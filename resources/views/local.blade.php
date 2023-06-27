@extends('layouts.master2')
@section('content')
<!-- navication start -->
<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
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
            <ul class="nav_items">
                <li class="nav"><a href="{{url('/')}}" class="link1">Home</a></li>
                <li class="nav"><a href="{{url('/about')}}" class="link1">About Us</a></li>
                <li class="nav"><a href="#" class="link1 active">Courses</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/local')}}">Local Classroom</a></li>
                        <li><a href="{{url('/online')}}">Online Class</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="{{url('/news')}}" class="link1">News</a></li>
                <li class="nav"><a href="{{url('/contact')}}" class="link1 white">Contact Us</a></li>
                <li class="nav"><a href="{{url('/faq')}}" class="link1 white">FAQ</a></li>
                <img src="img/edu1.png" class="head">
                <ul class="langauge">
                    <li><button onClick="" id="mm"><img src="img/mm.png"></button></li>
                    <li>
                        <button onClick="" id="jp"><img src="img/Japan.png"></button>
                    </li>
                    <li><button onClick="" id="uk"><img src="img/uk.png"></button></li>
                </ul>
            </ul>
        </div>
        <div class="sp">
            <ul class="nav_items">
                <li class="nav">
                    <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go"></a>
                    <div class="headerTxt sp">
                        <p class="txt2 margin">Local Classroom</p>
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
                                <li class="nav"><a href="index-uk.html" class="link1 ">Home</a></li>
                                <li class="nav"><a href="about-uk.html" class="link1">About Us</a></li>
                                <li class="nav"><a href="#" class="link1 active">Courses</a>
                                    <ul class="dropdown">
                                        <li><a href="local-uk.html">Local Classroom</a></li>
                                        <li><a href="online-uk.html">Online Class</a></li>
                                    </ul>
                                </li>

                                <li class="nav"><a href="news-uk.html" class="link1">News</a></li>
                                <li class="nav"><a href="contact-uk.html" class="link1 white">Contact Us</a></li>
                                <li class="nav"><a href="faq-uk.html" class="link1 white">FAQ</a></li>
                                <li class="nav">
                                    <button class="loginBtn">
                                        <a href="login.html" class="txt3">Login</a>
                                    </button>
                                </li>
                                <ul class="langauge">
                                    <li><button onClick="" id="mm"><img src="img/mm.png"></button></li>
                                    <li>
                                        <button onClick="" id="jp"><img src="img/Japan.png"></button>
                                    </li>
                                    <li><button onClick="" id="uk"><img src="img/uk.png"></button></li>
                                </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </ul>
        </div>
    </div>
    </div>
    <div class="headerTxt pc">
        <p class="txt2 margin">Local Classroom</p>
         @if (Route::has('login'))
        @auth
            <button class="loginBtn2">
                <span class="shadow"></span>
                <span class="edge"></span>
                <a href="{{ url('user') }}" class="front text">User page</a>
            </button>
        @else
           <button class="loginBtn2">
                <span class="shadow"></span>
                <span cass="edge"></span>
                <a href="{{ route('login') }}" class="front text">{{ __('message.login') }}</a>
            </button>
        @endauth

        @endif
    </div>
</header>
<!-- navication end -->
<main>
    <div class="classroom">
        <div class="classroom-content">
            <p class="searchTitle">Find your courses</p>
            <form class="search-focus">
                <input type="text" name="search" class="search" autocomplete="off">
            </form>
            <div class="menuGroup">
                <div class="menu-btn">
                    <div class="line line--1"></div>
                    <div class="line line--2"></div>
                    <div class="line line--3"></div>
                </div>
                <div class="classnav">

                    <div class="nav-cat">
                        <div class="nav-links">
                            <p class="navTitle">Categories</p>
                            <a href="" class="link">Japanese</a>
                            <a href="" class="link">English</a>
                            <a href="" class="link">ITPEC</a>
                            <a href="" class="link">Web development</a>
                            <hr class="line">
                            <p class="navTitle">Classes</p>

                            <a href="" class="link">Online class</a>
                            <a href="" class="link">Local class</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="class_container">
            <li class="classes">
                <img src="img/ad2.png" alt="" class="classImg">
                <p class="classTitle">IP(ITPEC)</p>
                <p class="classType">local class</p>
                <button><a href="{{url('/courseDtil')}}">More detail</a></button>
            </li>

            <li class="classes">
                <img src="img/ad.png" alt="" class="classImg">
                <p class="classTitle">JAVA</p>
                <p class="classType">local class</p>
                <button><a href="{{url('/courseDtil')}}">More detail</a></button>
            </li>

            <li class="classes">
                <img src="img/ad4.jpg" alt="" class="classImg">
                <p class="classTitle">Basic web design coding</p>
                <p class="classType">local class</p>
                <button><a href="{{url('/courseDtil')}}">More detail</a></button>
            </li>

            <li class="classes">
                <img src="img/ad3.png" alt="" class="classImg">
                <p class="classTitle">PHP</p>
                <p class="classType">local class</p>
                <button><a href="{{url('/courseDtil')}}">More detail</a></button>
            </li>
        </ul>
    </div>
</main>
@endsection('content')
