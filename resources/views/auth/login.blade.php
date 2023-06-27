@extends('layouts.antifooter')
@section('content')
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
<!--
    <header class="header2">
    <div class="container">
        <div class="pc">
            <ul class="langauge">
                <li><button onClick="" id="mm"><img src="img/mm.png"></button></li>
                <li>
                    <button onClick="" id="jp"><img src="img/Japan.png"></button>
                </li>
                <li><button onClick="" id="uk"><img src="img/uk.png"></button></li>
            </ul>
            <ul class="nav_items2">
                <li class="nav"><a href="index-uk.html" class="link1">Home</a></li>
                <li class="nav"><a href="about-uk.html" class="link1">About Us</a></li>
                <li class="nav"><a href="#" class="link1">Courses</a>
                    <ul class="dropdown">
                        <li><a href="#">Local Classroom</a></li>
                        <li><a href="#">Online Class</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="index-uk.html" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="news-uk.html" class="link1 active">News</a></li>
                <li class="nav"><a href="contact-uk.html" class="link1 black">Contact Us</a></li>
                <li class="nav"><a href="faq-uk.html" class="link1 black">FAQ</a></li>
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
                                        <li><a href="local.html">Local Classroom</a></li>
                                        <li><a href="online.html">Online Class</a></li>
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

                                </li><button class="loginbtn2">
                                    <span class="shadow"></span>
                                    <span class="edge"></span>
                                    <span class="front text"> Click me</span>
                                </button>
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
</header> -->

<!-- navication end -->

<main>
    <!-- new us start -->
    <section class="mypageElements">
        <div class="user_signup head2">
            <a href="#" class="backimg"><img src="img/back.png"></a>
            <img src="img/pkt.png" class="loginlogo" />
            <h3>Login in Your Account</h3>
            <div class="signupElements">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input placeholder="Email address" class="form_field" id="email" type="email" name="email"
                        :value="old('email')">
                    <input placeholder="Password" class="form_field" id="password" type="password" name="password"
                        required autocomplete="current-password">

                    </p>
                    <div class="btnGroup">
                        <button class="loginBtn2" type="submit">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <span class="front text">{{ __('message.login') }}</span>
                        </button>

                        <button class="loginBtn2">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <a href="{{ route('google-auth') }}" class="front text"><img class="ggic"
                                    src="../img/google.png">sign up with google</a>
                        </button>
                    </div>


                    <p class="notice">Don't have a account?<span><a class="reglink" href="user-signup.html">register here</a></span>
                </form>
            </div>
        </div>
    </section>
    <!-- about us end -->
</main>
@endsection('content')
