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


<main>
    <!-- new us start -->
    <section class="mypageElements">
        <div class="user_signup head2">
            <a href="#" class="backimg"><img src="img/back.png"></a>
            <img src="img/pkt.png" class="loginlogo" />
            <h3>Login in Your Account</h3>
            <div class="signupElements">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                     <input placeholder="Name" class="form_field" id="name" type="text" name="name"
                        :value="old('name')" required >

                    <input placeholder="Email address" class="form_field" id="email" type="email" name="email"
                        :value="old('email')" required >

                    <input placeholder="Password" class="form_field" id="password" type="password" name="password"
                         required autocomplete="current-password">

                    <input placeholder="Confirm Password" class="form_field"id="password_confirmation" type="password" name="password_confirmation"
                        required autocomplete="current-password">
                    </p>
                    <div class="btnGroup">
                        <button class="loginBtn2" type="submit">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <span class="front text"> {{ __('Register') }}</span>
                        </button>

                        <button class="loginBtn2">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <a href="{{ route('google-auth') }}" class="front text"><img class="ggic"
                                    src="../img/google.png">sign up with google</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- about us end -->
</main>
@endsection('content')
