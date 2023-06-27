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
                <li class="nav"><a href="#" class="link1 ">Courses</a>
                    <ul class="dropdown">
                        <li><a href="{{url('/local')}}">Local Classroom</a></li>
                        <li><a href="{{url('/online')}}">Online Class</a></li>
                    </ul>
                </li>
                <li class="nav"><a href="{{url('/')}}" class="link1"><img src="img/pkt.png" class="lo_go"></a></li>
                <li class="nav"><a href="{{url('/news')}}" class="link1">News</a></li>
                <li class="nav"><a href="{{url('/contact')}}" class="link1 white active">Contact Us</a></li>
                <li class="nav"><a href="{{url('/faq')}}" class="link1 white">FAQ</a></li>
                <img src="img/edu1.png" class="head">
            </ul>
            </div>
            <div class="sp">
                <ul class="nav_items">
                    <li class="nav">
                        <a href="index-uk.html" class="logo"><img src="img/pkt.png" class="lo_go"></a>
                        <div class="headerTxt sp">
                            <p class="txt2 margin">Get in Touch</p>
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
                                    <li class="nav"><a href="contact-uk.html" class="link1 white active">Contact Us</a></li>
                                    <li class="nav"><a href="faq-uk.html" class="link1 white">FAQ</a></li>
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
        <div class="headerTxt pc">
            <p class="txt1">Contact us</p>
            <p class="txt2 margin">For your future</p>
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
        <section class="contactUs">
            <!-- <div class="midline"></div> -->
            <div class="contact_elements">
        <div class="contact_left">
            <h4>
                Sent ​a Message
            </h4>
            <p class="contactTxt">
                You can fill in the information below and inquire about what you want to know. You can also inquire through the phone number
            </p>
            <form action="">
                <ul class="input_elements1 pc">
                    <li class="input">
                            <input type="input" name="name" placeholder="Name" class="form_field" >

                    </li>
                    <li class="input">
                        <select id="" name="" class="form_field" placeholder="">
                            <option value="" disabled selected class="opt">Interested in</option>
                            <option value="">Japanese</option>
                            <option value="">IT</option>
                            <option value="">Web coding</option>
                            <option value="">Classes</option>
                        </select>
                    </li>

                </ul>
                <ul class="input_elements2 pc">
                    <li class="input">
                            <input type="text" class="form_field" placeholder="Email address">

                    </li>
                    <li class="input">
                        <input type="text" class="form_field" placeholder="Phone Number">
                    </li>
                </ul>
                <ul class="input_elements1 sp">
                    <li class="input">
                            <input type="input" name="name" placeholder="Name" class="form_field" >
                    </li>
                    <li class="input">
                        <input type="text" class="form_field" placeholder="Email address">
                </li>
                <li class="input">
                    <input type="text" class="form_field" placeholder="Phone Number">
                </li>
                    <li class="input">
                        <select id="" name="" class="form_field" placeholder="Interested in">
                            <option value="" disabled selected class="opt">Interested in</option>
                            <option value="">Japanese</option>
                            <option value="">IT</option>
                            <option value="">Web coding</option>
                            <option value="">Classes</option>
                        </select>
                    </li>

                </ul>
                <textarea rows="10" cols="600" name="" form="" placeholder="Message" class="form_field2"></textarea>
                <button type="submit" class="contactbtn"><span>Submit</span> </button>
            </form>
        </div>

                <div class="contacts">
                    <p class="contactTitle">
                        Call us
                    </p>
                    <p class="contactTxt2">
                        Those who want to inquire can contact the following phone numbers during office hours (9:00-5:00).
                    </p>

                    <p class="addr">
                        <img src="img/phone.png" class="footicon">
                        +959 251801804, +959 251801805
                    </p>

                    <p class="contactTitle">
                        Visit us
                    </p>
                    <p class="contactTxt2">
                        Leverage PKT to further your future. For those who want to inquire,
                        you can come and inquire without any holidays
                    </p>

                    <p class="addr">
                        <img src="img/location.png" class="footicon">
                        No(71), Room A, Ground Floor, Upper Pazundaung Road Mingalar Taung Nyunt
                        Township,Yangon.
                    </p>

                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8889960348874!2d96.17195701481742!3d16.782197388443876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed6232ed2ac1%3A0x5817e6d2d92f0b44!2sPKT%20IT%20%26%20Japanese%20Language%20Center!5e0!3m2!1sen!2smm!4v1679023282286!5m2!1sen!2smm"
                    width="1058" height="404" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
@endsection
