@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt1">{{ __('message.Read More') }}</p>
    <p class="txt2 margin">{{ __('message.aboutus') }}</p>
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
    <!-- about us start -->
    <section class="aboutus2">

        <div class="pc">
            <ul class="aboutus_elements">
                <li class="abtMain">
                    <p class="abtTitle">{{ __('message.title1') }}</p>
                    <p class="abtTitle2">{{ __('message.title1-1') }}
                    </p>
                    <p class="abtTxt">
                    {{ __('message.content1') }}</p>

                    <p class="abtTitle2">{{ __('message.title2') }}</p>
                    <p class="abtTxt">
                    {{ __('message.content2') }}
                    </p>
                    <p>
                    <p class="abtTitle2">{{ __('message.title3') }}</p>
                    <p class="abtTxt">
                    {{ __('message.content3') }}
                    </p>
                    <p>
                    <p class="abtTitle2"> {{ __('message.title4') }}</p>
                    <p class="abtTxt">
                    {{ __('message.content4') }}
                    </p>

                    <p>
                <li class="abtMain2">

                    <img src="{{ asset('img/japan.jpg') }}" class="abtImg">
                    <img src="{{ asset('img/japan.jpg') }}" class="abtImg">
                    <img src="{{ asset('img/team.jpg') }}" class="abtImg">
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
        <p class="title4">{{ __('message.classes') }}</p>
        <ul class="CB_elements">
            <li class="element3">
                <img src="{{ asset('img/icon5.png') }}" class="icon2">
                <h3>{{ __('message.register-student') }}</h3>
                <h2 id="count1">500</h2>
            </li>
            <li class="element3">
                <img src="{{ asset('img/icon4.png') }}" class="icon2">
                <h3>{{__('message.online-stu') }}</h3>
                <h2 id="count2">1550</h2>
            </li>

            <li class="element3">

                <img src="{{ asset('img/icon6.png') }}" class="icon2">
                <h3>{{ __('message.teacher') }}</h3>
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
                <img src="{{ asset('img/Poe.jpg') }}" class="teacher">
                <p class="trName">Poe Kyi Thar</p>
                <p class="title5">Japanese Teacher</p>

                <a href="#" class="cta">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/May.jpg') }}" class="teacher">
                <p class="trName">May Thu Kyaw</p>
                <p class="title5">Japanese Teacher</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/naing.jpg') }}" class="teacher">
                <p class="trName">Naing Aung Lin</p>
                <p class="title5">Web Trainer</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/hsu.jpg') }}" class="teacher">
                <p class="trName">Hsu Hnin Wai</p>
                <p class="title5">Web Trainer</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/MNI.jpg') }}" class="teacher">
                <p class="trName">Ni Ni Soe</p>
                <p class="title5">Japanese teacher</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/Chue.jpeg') }}" class="teacher">
                <p class="trName">Chyu Yati</p>
                <p class="title5">ITPEC (IP)</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
            <li class="trainer">
                <img src="{{ asset('img/soe.jpg') }}" class="teacher">
                <p class="trName">Soe Yadanar</p>
                <p class="title5">ITPEC (FE)</p>
                <a href="#" class="cta">
                <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </li>
        </ul>
    </section>
    <!-- Trainer end -->

</main>
@endsection('content')
@section('footer-js')
<script src="{!! asset('js/animate.js') !!}"></script>
@endsection('footer-js')
