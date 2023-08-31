@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt2 margin">{{ __('message.coursesDtil') }}</p>
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
    <div class="classroom2">
        <p class="searchTitle2">Course Name</p>
        <div class="classroom-content2">



            <div class="courseDtil2">
                <img src="{{ asset('img/ad2.png') }}" alt="">
                <p class="classdtil">
                    New class schedule for IT 2 Year Plan has been released
                    Even though schools are closed, this class is convenient for students who are interested in technology and want to continue their education.
                    Topics to be taught
                    computer based Web Design Basics Basic and Advanced Web Coding
                    ITPEC ( IP )
                    ITPEC ( FE )
                    OnJob Training (3 Months) (Note: Must have a class attendance rate of 80% or above. Only those who can submit projects in class will receive Onjob Training.)
                </p>
            </div>
            <div class="cls-btn">
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">Enroll</a>
                </button>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">Instructor Name</a>
                </button>
            </div>

        </div>
    </div>

    <p class="title8">Related courses</p>
    <div>
        <ul class="relatedClass">
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>

        </ul>
    </div>

</main>
@endsection
