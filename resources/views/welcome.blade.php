@extends('layouts.master')
@section('content')
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
@section('footer-js')
<script src="{!! asset('js/animate.js') !!}"></script>
@endsection('footer-js')

