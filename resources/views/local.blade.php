@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt2 margin">{{ __('message.local') }}</p>
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
            @if(isset($respond['course']) && count($respond['course']) > 0)
                @foreach ($respond['course'] as $course)
                    <li class="classes">
                        <img src="{{ asset('storage/'.$course->image) }}" alt="" class="classImg">
                        <p class="classTitle">{{ $course->title }}</p>
                        <p class="classType">{{ $course->campus }} class</p>
                        <button class="loginBtn2">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <a href="{{ route('course.detail', ['campus' => $course->campus, 'id' => $course->id])}}" class="front text">{{ __('message.moredtil') }}</a>
                        </button>
                    </li>
                @endforeach

            @endif
        </ul>
    </div>
</main>
@endsection('content')
