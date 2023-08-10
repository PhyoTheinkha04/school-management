@extends('layouts.master')
@section('content')
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
                <li class="nav"><a href="{{url('/')}}" class="link1 active">{{ __('message.home') }}</a></li>
                <li class="nav"><a href="{{url('/about')}}" class="link1">{{ __('message.aboutus') }}</a></li>
                <li class="nav"><a href="#" class="link1">{{ __('message.courses') }}</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/local')}}">{{ __('message.local') }}</a></li>
                        <li><a href="{{url('/online')}}">{{ __('message.online') }}</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="{{url('/news')}}" class="link1">{{ __('message.news') }}</a></li>
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
    <div class="headerTxt pc">
        <p class="txt1">{{ __('message.plan') }}</p>
        <p class="txt1">{{ __('message.future') }}</p>
        <p class="txt2 margin">{{ __('message.center') }}</p>
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
            <span class="edge"></span>
            <a href="{{ route('login') }}" class="front text">{{ __('message.login') }}</a>
        </button>
        @endauth

        @endif


    </div>

</header>

<!-- navication end -->
<main>

    <!-- course outline start -->
    <section class="course_OL">
        <p class="title4">{{ __('message.t1') }}</p>
        <ul class="course_elements">
            <li class="element1">
                <div class="course">
                    <img src="img/jpicon.png" class="icon">

                </div>
                <p class="title2">
                    {{ __('message.ct1') }}
                </p>
                <p class="courseTXT">
                    {{ __('message.cp1') }}
                </p>
            </li>
            <li class="element1 element2">
                <div class="course">
                    <img src="img/icon2.png" class="icon">

                </div>
                <p class="title2">

                    {{ __('message.ct2') }}
                </p>
                <p class="courseTXT">
                    {{ __('message.cp2') }}
                </p>
            </li>
            <li class="element1 element3">
                <div class="course">
                    <img src="img/icon3.png" class="icon">

                </div>
                <p class="title2">
                    {{ __('message.ct3') }}
                </p>
                <p class="courseTXT">
                    {{ __('message.cp3') }}
                </p>
            </li>
        </ul>
    </section>
    <!-- course outline end -->

    <!-- about us start -->
    <section class="aboutus">
        <p class="title4">{{ __('message.t2') }}</p>
        <ul class="aboutus_elements">

            <li class="element2">
                <img src="img/str.png" class="team">
            </li>
            <li class="element2">
                <div class="abtDetail">
                    <p class="title2">
                        {{ __('message.abt') }}
                    </p>
                    <p class="aboutusTXT">
                        {{ __('message.abc') }}
                    </p>
                </div>

            </li>

        </ul>
    </section>
    <!-- about us end -->

    <!-- Batches and course start-->
    <section class="courses">
        <p class="title4">{{ __('message.t3') }}</p>
        <ul class="CB_elements">
            <li class="element3">
                <img src="img/icon5.png" class="icon2">
                <h3>{{ __('message.cb1') }}</h3>
                <h2 id="count1">500</h2>
            </li>
            <li class="element3">
                <img src="img/icon4.png" class="icon2">
                <h3>{{ __('message.cb2') }}</h3>
                <h2 id="count2">1550</h2>
            </li>

            <li class="element3">

                <img src="img/icon6.png" class="icon2">
                <h3>{{ __('message.cb3') }}</h3>
                <h2 id="count3">7</h2>
            </li>
        </ul>
    </section>
    <!-- Batches and course end-->

    <!-- Trainer  start -->
    <section class="ourTrainer">
        <p class="title4">{{ __('message.t4') }}</p>
        <ul class="trainer_elements slider">
            <li class="trainer">
                <img src="img/Poe.jpg" class="teacher">
                <p class="trName">Poe Kyi Thar</p>
                <p class="title5">Japanese Teacher</p>

                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/May.jpg" class="teacher">
                <p class="trName">May Thu Kyaw</p>
                <p class="title5">Japanese Teacher</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/naing.jpg" class="teacher">
                <p class="trName">Naing Aung Lin</p>
                <p class="title5">Web Trainer</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/hsu.jpg" class="teacher">
                <p class="trName">Hsu Hnin Wai</p>
                <p class="title5">Web Trainer</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/MNI.jpg" class="teacher">
                <p class="trName">Ni Ni Soe</p>
                <p class="title5">Japanese teacher</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/Chue.jpeg" class="teacher">
                <p class="trName">Chyu Yati</p>
                <p class="title5">ITPEC (IP)</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="img/soe.jpg" class="teacher">
                <p class="trName">Soe Yadanar</p>
                <p class="title5">ITPEC (FE)</p>
                <a href="#" class="cta">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
        </ul>
    </section>
    <!-- Trainer end -->

    <!-- founder start -->
    <section class="founder">
        <dl>
            <dt></dt>
            <dd><img src="img/Poe2.jpg" class="FounderImg">
                <h1>{{ __('message.ceo_name') }}<span>{{ __('message.label') }}</span></h1>
                <p class="founderDtil">
                    {{ __('message.ceo_content') }}
                </p>
            </dd>
        </dl>

    </section>
    <!-- founder end -->

    <section class="news">
        <p class="title4">{{ __('message.t5') }}</p>
        <div class="newElement">
            <div class="newsDtil">
                <img src="img/news1.jpg" class="newsImg">
                <p class="newTxt">
                    Many young Burmese people, including myself, try to work abroad in order to change their lives...
                </p>
                <a href="#" class="cta2">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>

            </div>
            <div class="newsDtil">
                <img src="img/news2.jpg" class="newsImg">
                <p class="newTxt">
                    As an opportunity to become a recognized technician in Japan with just a 2-year investment...
                </p>
                <a href="#" class="cta2">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="img/news3.jpg" class="newsImg">
                <p class="newTxt">
                    JLPT's short form is called Japanese Language Proficiency Test, and it is an internationally
                    recognized Japanese...
                </p>
                <a href="#" class="cta2">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="img/news4.jpg" class="newsImg">
                <p class="newTxt">
                    Just by investing 2 years, you can become a certified technician in Japan...
                </p>

                </p>
                <a href="#" class="cta2">
                    <span>more</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</main>


@endsection('content')
