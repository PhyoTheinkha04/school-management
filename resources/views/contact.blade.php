@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt1">{{ __('message.contact') }}</p>
    <p class="txt2 margin">{{ __('message.future2') }}</p>
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
    <section class="contactUs">
        <!-- <div class="midline"></div> -->
        <div class="contact_elements">
            <div class="contact_left">
                <h4>
                    {{ __('message.message') }}
                </h4>
                <p class="contactTxt">
                    {{ __('message.messagecon') }}
                </p>
                <form action="">
                    <ul class="input_elements1 pc">
                        <li class="input">
                            <input type="input" name="name" placeholder="{{ __('message.cinput') }}" class="form_field">

                        </li>
                        <li class="input">
                            <select id="" name="" class="form_field" placeholder="">
                                <option value="" disabled selected class="opt">{{ __('message.cinput2') }}</option>
                                <option value="">Japanese</option>
                                <option value="">IT</option>
                                <option value="">Web coding</option>
                                <option value="">Classes</option>
                            </select>
                        </li>

                    </ul>
                    <ul class="input_elements2 pc">
                        <li class="input">
                            <input type="text" class="form_field" placeholder="{{ __('message.cinput1') }}">

                        </li>
                        <li class="input">
                            <input type="text" class="form_field" placeholder="{{ __('message.cinput3') }}">
                        </li>
                    </ul>
                    <ul class="input_elements1 sp">
                        <li class="input">
                            <input type="input" name="name" placeholder="{{ __('message.cinput') }}" class="form_field">
                        </li>
                        <li class="input">
                            <input type="text" class="form_field" placeholder="{{ __('message.cinput') }}">
                        </li>
                        <li class="input">
                            <input type="text" class="form_field" placeholder="{{ __('message.cinput') }}">
                        </li>
                        <li class="input">
                            <select id="" name="" class="form_field" placeholder="Interested in">
                                <option value="" disabled selected class="opt">{{ __('message.cinput') }}</option>
                                <option value="">Japanese</option>
                                <option value="">IT</option>
                                <option value="">Web coding</option>
                                <option value="">Classes</option>
                            </select>
                        </li>

                    </ul>
                    <textarea rows="10" cols="600" name="" form="" placeholder="{{ __('message.cinput4') }}" class="form_field2"></textarea>
                    <button type="submit" class="contactbtn"><span>{{ __('message.submit') }}</span> </button>
                </form>
            </div>

            <div class="contacts">
                <p class="contactTitle">
                    {{ __('message.call') }}
                </p>
                <p class="contactTxt2">
                    {{ __('message.callcon') }}
                </p>

                <p class="addr">
                    <img src="{{ asset('img/phone.png') }}" class="footicon">
                    {{ __('message.ph') }}
                </p>

                <p class="contactTitle">
                    {{ __('message.visit') }}
                </p>
                <p class="contactTxt2">
                    {{ __('message.visitcon') }}
                </p>

                <p class="addr">
                    <img src="{{ asset('img/location.png') }}" class="footicon">
                    {{ __('message.add') }}
                </p>

            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.8889960348874!2d96.17195701481742!3d16.782197388443876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed6232ed2ac1%3A0x5817e6d2d92f0b44!2sPKT%20IT%20%26%20Japanese%20Language%20Center!5e0!3m2!1sen!2smm!4v1679023282286!5m2!1sen!2smm" width="1058" height="404" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</main>
@endsection
