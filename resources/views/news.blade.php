@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt1">{{ __('message.Read More') }}</p>
    <p class="txt2 margin">{{ __('message.news') }}</p>
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
            @if (isset($respond["news"])&& count($respond["news"]) > 0)
            @foreach ($respond["news"] as $new)
            <div class="newsDtil">
                <img src="{{ asset('storage/'.$new->image) }}" class="newsImg" />
                <p class="newTxt">
                    {{$new->title}} <br>
                   {{ Str::limit($new->contents, 200, '...') }}


                </p>
                <a href="{{ route('news.detail', ['lophpcale' => $locale,'id' => $new->id]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </section>
    <!-- about us end -->
</main>
@endsection('content')
