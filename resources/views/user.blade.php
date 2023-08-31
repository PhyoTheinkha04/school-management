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
<header class="header2">
    <div class="container">
        <div class="pc">
            <ul class="nav_items2">
                <li class="nav"><a href="{{url('/')}}" class="link1">Home</a></li>
                <li class="nav"><a href="{{url('/about')}}" class="link1">About Us</a></li>
                <li class="nav">
                    <a href="#" class="link1">Courses</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/local')}}">Local Classroom</a></li>
                        <li><a href="{{url('/online')}}">Online Class</a></li>
                    </ul>
                </li>
                <li class="nav">
                    <a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go" /></a>
                </li>
                <li class="nav">
                    <a href="{{url('/news')}}" class="link1 active">News</a>
                </li>
                <li class="nav">
                    <a href="{{url('/contact')}}" class="link1 black">Contact Us</a>
                </li>
                <li class="nav"><a href="faq-uk.html" class="link1 black">FAQ</a></li>
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
                    <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go" /></a>
                </li>
                <img src="img/edu1.png" class="head" />
                <div class="classnav">
                    <div class="menu-btn1">
                        <div class="line line--1"></div>
                        <div class="line line--2"></div>
                        <div class="line line--3"></div>
                    </div>
                    <nav>
                        <div class="nav-menulinks">
                            <ul class="nav_menuitems sp">
                                <li class="nav">
                                    <a href="index-uk.html" class="link1 active">Home</a>
                                </li>
                                <li class="nav">
                                    <a href="about-uk.html" class="link1">About Us</a>
                                </li>
                                <li class="nav">
                                    <a href="#" class="link1">Courses</a>
                                    <ul class="dropdown">
                                        <li><a href="local-uk.html">Local Classroom</a></li>
                                        <li><a href="online-uk.html">Online Class</a></li>
                                    </ul>
                                </li>

                                <li class="nav">
                                    <a href="news-uk.html" class="link1">News</a>
                                </li>
                                <li class="nav">
                                    <a href="contact-uk.html" class="link1 white">Contact Us</a>
                                </li>
                                <li class="nav">
                                    <a href="faq-uk.html" class="link1 white">FAQ</a>
                                </li>
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
</header>

<!-- navication end -->

<main>
    <section class="mypageElements">
        <div class="mypage head2">
            <h3>Hello {{ Auth::user()->name }}</h3>
            <div class="circle">
                <div class="user">
                    <img src="img/Poe2.jpg" class="userElements" />
                </div>
                <a href="{{url('/profile')}}">
                    <div class="mypage_icon">
                        <img src="img/user.png" class="userElements" />
                    </div>
                    <div class="arc"></div>
                </a>
                <a href="{{url('/purchase_history')}}">
                    <div class="mypage1_icon">
                        <img src="img/money.png" class="userElements" />
                    </div>
                    <div class="arc1"></div>
                </a>
                <a href="{{url('/register_courses')}}">
                    <div class="mypage2_icon">
                        <img src="img/class.png" class="userElements" />
                    </div>
                    <div class="arc2"></div>
                </a>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logoutBtn" type="submit">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="route('logout')" onclick="event.preventDefault();
                       this.closest('form').submit();" class="front text">Logout</a>
                </button>
                <button class="">
                    <a class="txt3"></a>
                </button>
            </form>
        </div>
    </section>
</main>
@endsection('content')
