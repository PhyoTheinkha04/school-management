@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt2 margin">{{ __('message.newsdtil') }}</p>
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

            <h3>{{$respond["news_detail"]->title}}</h3>
            <img src="{{ asset('storage/'.$respond['news_detail']->image) }}" class="newsImg2">

            <p class="newTxt2">
                {!!$respond["news_detail"]->contents!!}
            </p>

    </section>
    <!-- about us end -->
</main>
@endsection('content')
