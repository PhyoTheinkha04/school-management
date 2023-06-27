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
                <li class="nav"><a href="{{url('/about')}}" class="link1 active">About Us</a></li>
                <li class="nav"><a href="#" class="link1">Courses</a>
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
                        <p class="txt1">Plan your</p>
                        <p class="txt1">future with</p>
                        <p class="txt2 margin">PKT Education Center</p>
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
    <div class="headerTxt pc">
        <p class="txt1">Plan your</p>
        <p class="txt1">future with</p>
        <p class="txt2 margin">PKT Education Center</p>
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
    <!-- about us start -->
    <section class="aboutus2">

        <div class="pc">
            <ul class="aboutus_elements">
                <li class="abtMain">
                    <p class="abtTitle">WELCOME TO
                    <p class="abtTitle2">PKT EDUCATION CENTER</p>
                    </p>
                    <p class="abtTxt">
                        In addition to 4 years of work experience as a programmer
                        after attending a technical college in Japan, it is run by teachers
                        who have established a technology company in Myanmar. In addition
                        to the courses taught in the training school, there are also online courses
                        for students who want to attend online. Currently, more than 1,500 participants
                        who attended online have been taught

                    <p class="abtTitle2">OUR INTENSION</p>
                    <p class="abtTxt">
                        Paving the way for the improvement of the lives of young people who are financially
                        disadvantaged but work hard
                        It is intended for young people who want to become technicians by combining Japanese studies and
                        technology.
                    </p>
                    <p>
                    <p class="abtTitle2">OUR VISION</p>
                    <p class="abtTxt">
                        Utilizing technology and Japanese, Burma's workplace
                        To produce students who can go to work in Japanese workplaces.
                        To stand as the best and most honest school in Burma for
                        students who want to study in Japan.
                    </p>
                    <p>
                    <p class="abtTitle2">ABOUT US</p>
                    <p class="abtTxt">
                        The founder, Mrs. Poe Kyi Thar, taught technical subjects in Japan and gained experience
                        as a technician in a technology company in Tokyo, Japan. In 2014, we opened a branch office
                        in Burma and have been providing online technology services. It was opened as
                        a Japanese language school in 4th month of 2018, and since 2019, it has been teaching outside
                        courses.
                    </p>
                    <p>
                <li class="abtMain2">

                    <img src="img/japan.jpg" class="abtImg">
                    <img src="img/japan.jpg" class="abtImg">
                    <img src="img/team.jpg" class="abtImg">
                </li>
        </div>

        <div class="sp">
            <ul class="aboutus_elements">

                <p class="abtTitle">WELCOME TO
                <p class="abtTitle2">PKT EDUCATION CENTER</p>
                </p>
                <p class="abtTxt">
                    In addition to 4 years of work experience as a programmer
                    after attending a technical college in Japan, it is run by teachers
                    who have established a technology company in Myanmar. In addition
                    to the courses taught in the training school, there are also online courses
                    for students who want to attend online. Currently, more than 1,500 participants
                    who attended online have been taught
                </p>
                <img src="img/batch3.jpg" class="abtImg">
                <p class="abtTitle2">OUR INTENSION</p>
                <p class="abtTxt">
                    Paving the way for the improvement of the lives of young people who are financially disadvantaged
                    but work hard
                    It is intended for young people who want to become technicians by combining Japanese studies and
                    technology.
                </p>
                <img src="img/japan.jpg" class="abtImg">
                <p>
                <p class="abtTitle2">OUR VISION</p>
                <p class="abtTxt">
                    Utilizing technology and Japanese, Burma's workplace
                    To produce students who can go to work in Japanese workplaces.
                    To stand as the best and most honest school in Burma for
                    students who want to study in Japan.
                </p>
                <img src="img/team.jpg" class="abtImg">
                <p>
                <p class="abtTitle2">ABOUT US</p>
                <p class="abtTxt">
                    The founder, Mrs. Poe Kyi Thar, taught technical subjects in Japan and gained experience
                    as a technician in a technology company in Tokyo, Japan. In 2014, we opened a branch office
                    in Burma and have been providing online technology services. It was opened as
                    a Japanese language school in 4th month of 2018, and since 2019, it has been teaching outside
                    courses.
                </p>
                <p>
        </div>
        </li>

        </ul>
        </div>
    </section>
    <!-- about us end -->

    <!-- Batches and course start-->
    <section class="courses">
        <p class="title4">Our Courses & Batches</p>
        <ul class="CB_elements">
            <li class="element3">
                <img src="img/icon5.png" class="icon2">
                <h3>Registred student</h3>
                <h2 id="count1">500</h2>
            </li>
            <li class="element3">
                <img src="img/icon4.png" class="icon2">
                <h3>Online Students</h3>
                <h2 id="count2">1550</h2>
            </li>

            <li class="element3">

                <img src="img/icon6.png" class="icon2">
                <h3>Trainers</h3>
                <h2 id="count3">7</h2>
            </li>
        </ul>
    </section>
    <!-- Batches and course end-->

    <!-- Trainer  start -->
    <section class="ourTrainer">
        <p class="title4">Our Trainers</p>
        <ul class="trainer_elements slider">
            <li class="trainer">
                <p class="title5">japanese teacher</p>
                <p class="trName">Poe Kyi Thar</p>
                <img src="img/Poe.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">japanese teacher</p>
                <p class="trName">May Thu Kyaw</p>
                <img src="img/May.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">Web Trainer</p>
                <p class="trName">Naing Aung Lin</p>
                <img src="img/naing.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">Web Trainer</p>
                <p class="trName">Hsu Hnin Wai</p>
                <img src="img/hsu.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">japanese teacher</p>
                <p class="trName">Ni Ni Soe</p>
                <img src="img/MNI.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">ITPEC (IP)</p>
                <p class="trName">Chyu Yati</p>
                <img src="img/chu.jpg" class="teacher">
                <a href="#" class="link3"> more</a>
            </li>
            <li class="trainer">
                <p class="title5">ITPEC (FE)</p>
                <p class="trName">Soe Yadanar</p>
                <img src="img/soe.jpg" class="teacher">
                <a href="#" class="link3">more</a>
            </li>
        </ul>
    </section>
    <!-- Trainer end -->

</main>
@endsection('content')
