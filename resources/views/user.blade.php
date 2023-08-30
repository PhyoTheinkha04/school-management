@extends('layouts.master2')
@section('content')
<main>
    <section class="mypageElements">
        <div class="mypage head2">
            <h3>Hello {{ Auth::user()->name }}</h3>
            <div class="circle">
                <div class="user">
                    <img src="img/Poe2.jpg" class="userElements" />
                </div>
                <a href="{{url('/profile')}}">
                    <div class="mypage_icon">
                        <img src="img/user.png" class="userElements" />
                    </div>
                    <div class="arc"></div>
                </a>
                <a href="{{url('/purchase_history')}}">
                    <div class="mypage1_icon">
                        <img src="img/money.png" class="userElements" />
                    </div>
                    <div class="arc1"></div>
                </a>
                <a href="{{url('/register_courses')}}">
                    <div class="mypage2_icon">
                        <img src="img/class.png" class="userElements" />
                    </div>
                    <div class="arc2"></div>
                </a>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logoutBtn" type="submit">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="route('logout')" onclick="event.preventDefault();
                       this.closest('form').submit();" class="front text">Logout</a>
                </button>
                <button class="">
                    <a class="txt3"></a>
                </button>
            </form>
        </div>
    </section>
</main>
@endsection('content')
