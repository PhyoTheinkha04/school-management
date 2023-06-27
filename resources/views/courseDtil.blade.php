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
                <ul class="langauge">
                <li><button onClick="" id="mm"><img src="img/mm.png"></button></li>
                <li>
                    <button onClick="" id="jp"><img src="img/Japan.png"></button>
                </li>
                <li><button onClick="" id="uk"><img src="img/uk.png"></button></li>
            </ul>
            <ul class="nav_items">
                <li class="nav"><a href="{{url('/')}}" class="link1 ">Home</a></li>
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
            </ul>
            </div>
            <div class="sp">
                <ul class="nav_items">
                    <li class="nav">
                        <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go"></a>
                        <div class="headerTxt sp">
                            <p class="txt2 margin">Course detail</p>
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
                                            <li><a href="online.html">Online Class</a></li>
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
            <p class="txt2 margin">Course detail</p>
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


            <div class="courseDtil">
                <img src="img/ad2.png" alt="">
                <p class="classdtil">
                    New class schedule for IT 2 Year Plan has been released
                    <br>
                    🌸 Even though schools are closed, this class is convenient for students who are interested in technology and want to continue their education.
                    <br>
                    🌸 Topics to be taught
                    <br>
                    1) computer based Web Design Basics Basic and Advanced Web Coding
                    <br>
                    2) ITPEC ( IP )
                    <br>
                    3) ITPEC ( FE )
                    <br>
                    4) OnJob Training (3 Months) (Note: Must have a class attendance rate of 80% or above. Only those who can submit projects in class will receive Onjob Training.)
                    <br>
                </p>
            </div>
            </div>


        </div>
        <p class="title8">Related courses</p>
         <ul class="relatedClass">
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>

            </ul>
    </main>
@endsection
