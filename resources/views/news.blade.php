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
                <li class="nav"><a href="#" class="link1">Courses</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/local')}}">Local Classroom</a></li>
                        <li><a href="{{url('/online')}}">Online Class</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="{{url('/news')}}" class="link1 active">News</a></li>
                <li class="nav"><a href="{{url('/contact')}}" class="link1 white">Contact Us</a></li>
                <li class="nav"><a href="{{url('/faq')}}" class="link1 white">FAQ</a></li>
                <img src="img/edu1.png" class="head">
            </ul>
      </div>
      <div class="sp">
        <ul class="nav_items">
          <li class="nav">
            <a href="index.html" class="logo"><img src="img/pkt.png" class="lo_go" /></a>
            <div class="headerTxt sp">
              <p class="txt1">Read more</p>
              <p class="txt2 margin">News</p>
            </div>
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
                    <a href="index.html" class="link1 ">Home</a>
                  </li>
                  <li class="nav">
                    <a href="about.html" class="link1">About Us</a>
                  </li>
                  <li class="nav">
                    <a href="#" class="link1">Courses</a>
                    <ul class="dropdown">
                      <li><a href="local.html">Local Classroom</a></li>
                      <li><a href="online.html">Online Class</a></li>
                    </ul>
                  </li>

                  <li class="nav">
                    <a href="news.html" class="link1  active">News</a>
                  </li>
                  <li class="nav">
                    <a href="contact.html" class="link1 white">Contact Us</a>
                  </li>
                  <li class="nav">
                    <a href="faq.html" class="link1 white">FAQ</a>
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
    <div class="headerTxt pc">
      <p class="txt1">Read more</p>
      <p class="txt2 margin">News</p>
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
    <!-- new us start -->
    <section class="news">
      <div class="newElement2">
        <div class="newsDtil">
          <img src="img/news1.jpg" class="newsImg" />
          <p class="newTxt">
            Many young Myanmar people, including myself, go abroad to work in order to change their lives...
          </p>
          <a href="{{url('/newDetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news2.jpg" class="newsImg" />
          <p class="newTxt">
            As an opportunity to become a recognized technician in Japan with just a 2-year investment...
          </p>
          <a href="{{url('/newDetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news3.jpg" class="newsImg" />
          <p class="newTxt">
            JLPT, short for Japanese Language Proficiency Test, is an internationally recognized Japanese proficiency test...
          </p>
          <a href="{{url('/newDetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news4.jpg" class="newsImg" />
          <p class="newTxt">
            An opportunity to become a recognized technician in Japan with just a 2-year investment...
          </p>
          <a href="{{url('/newdetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news1.jpg" class="newsImg" />
          <p class="newTxt">
            Many young Myanmar people, including myself, go abroad to work in order to change their lives...
          </p>
          <a href="{{url('/newdetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news2.jpg" class="newsImg" />
          <p class="newTxt">
            As an opportunity to become a recognized technician in Japan with just a 2-year investment...
          </p>
          <a href="{{url('/newdetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news3.jpg" class="newsImg" />
          <p class="newTxt">
            JLPT, short for Japanese Language Proficiency Test, is an internationally recognized Japanese proficiency test...
          </p>
          <a href="{{url('/newdetail')}}" class="link4">read more</a>
        </div>
        <div class="newsDtil">
          <img src="img/news4.jpg" class="newsImg" />
          <p class="newTxt">
            An opportunity to become a recognized technician in Japan with just a 2-year investment...
          </p>
          <a href="{{url('/newdetail')}}" class="link4">read more</a>
        </div>
      </div>
    </section>
    <!-- about us end -->
  </main>
@endsection('content')
