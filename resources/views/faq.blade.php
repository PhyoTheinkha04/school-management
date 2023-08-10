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
                <li class="nav"><a href="{{url('/news')}}" class="link1">News</a></li>
                <li class="nav"><a href="{{url('/contact')}}" class="link1 white">Contact Us</a></li>
                <li class="nav"><a href="{{url('/faq')}}" class="link1 white active">FAQ</a></li>
                <img src="img/edu1.png" class="head">
            </ul>
      </div>
      <div class="sp">
        <ul class="nav_items">
          <li class="nav">
            <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go"></a>
            <div class="headerTxt sp">

              <p class="main_ttl margin">Frequently <br>asked <br>questions</p>
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
                  <li class="nav"><a href="#" class="link1">Courses</a>
                    <ul class="dropdown">
                      <li><a href="local-uk.html">Local Classroom</a></li>
                      <li><a href="online-uk.html">Online Class</a></li>
                    </ul>
                  </li>

                  <li class="nav"><a href="news-uk.html" class="link1">News</a></li>
                  <li class="nav"><a href="contact-uk.html" class="link1 white">Contact Us</a></li>
                  <li class="nav"><a href="faq-uk.html" class="link1 white active">FAQ</a></li>
                  <li class="nav">
                    <button class="loginBtn">
                      <a href="login.html" class="txt3">Login</a>
                    </button>
                  </li>
                  <ul class="langauge">
                    <li class="lang"><a href=""><img src="img/mm.png"></a></li>
                    <li class="lang"><a href=""><img src="img/Japan.png"></a></li>
                    <li class="lang"><a href=""><img src="img/uk.png"></a></li>
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
      <p class="txt2 margin">FAQ</p>
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
    <!-- new us start -->
    <section class="faq">
      <div class="faq-content">
        <div class="faq-left pc">
          <h3 class="faq-title">Frequently <br>asked <br>questions</h3>
        </div>
        <div class="faq-right">
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                What is JLPT???
              </div><!-- /.accordion-item-header -->
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  It is an internationally recognized Japanese proficiency test.
                  There are 5 levels, starting from the basic N5 and going through N4, N3, N2, and N1.
                  If you are going to Japan for work or school, this is a mandatory exam.
                  In Myanmar, if you pass the N2 level, you can start earning a salary of at least 500,000.
                  It is said that in the work of an expert, at least 800,000 is paid to the person who succeeds in N1.
                </div>
              </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
          </div>
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                What is JLPT???
              </div><!-- /.accordion-item-header -->
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  It is an internationally recognized Japanese proficiency test.
                  There are 5 levels, starting from the basic N5 and going through N4, N3, N2, and N1.
                  If you are going to Japan for work or school, this is a mandatory exam.
                  In Myanmar, if you pass the N2 level, you can start earning a salary of at least 500,000.
                  It is said that in the work of an expert, at least 800,000 is paid to the person who succeeds in N1.
                </div>
              </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
          </div>
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                What is JLPT???
              </div><!-- /.accordion-item-header -->
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  It is an internationally recognized Japanese proficiency test.
                  There are 5 levels, starting from the basic N5 and going through N4, N3, N2, and N1.
                  If you are going to Japan for work or school, this is a mandatory exam.
                  In Myanmar, if you pass the N2 level, you can start earning a salary of at least 500,000.
                  It is said that in the work of an expert, at least 800,000 is paid to the person who succeeds in N1.
                </div>
              </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
          </div>
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                What is JLPT???
              </div><!-- /.accordion-item-header -->
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  It is an internationally recognized Japanese proficiency test.
                  There are 5 levels, starting from the basic N5 and going through N4, N3, N2, and N1.
                  If you are going to Japan for work or school, this is a mandatory exam.
                  In Myanmar, if you pass the N2 level, you can start earning a salary of at least 500,000.
                  It is said that in the work of an expert, at least 800,000 is paid to the person who succeeds in N1.
                 </div>
              </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
          </div>
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-item-header">
                What is JLPT???
              </div><!-- /.accordion-item-header -->
              <div class="accordion-item-body">
                <div class="accordion-item-body-content">
                  It is an internationally recognized Japanese proficiency test.
                  There are 5 levels, starting from the basic N5 and going through N4, N3, N2, and N1.
                  If you are going to Japan for work or school, this is a mandatory exam.
                  In Myanmar, if you pass the N2 level, you can start earning a salary of at least 500,000.
                  It is said that in the work of an expert, at least 800,000 is paid to the person who succeeds in N1.
                </div>
              </div><!-- /.accordion-item-body -->
            </div><!-- /.accordion-item -->
          </div>
        </div>

      </div>
    </section>
    <!-- about us end -->
  </main>
  @endsection('content')
