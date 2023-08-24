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
            <div class="newsDtil">
                <img src="{{ asset('img/news1.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    Many young Myanmar people, including myself, go abroad to work in order to change their lives...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news2.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    As an opportunity to become a recognized technician in Japan with just a 2-year investment...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news3.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    JLPT, short for Japanese Language Proficiency Test, is an internationally recognized Japanese
                    proficiency test...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news4.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    An opportunity to become a recognized technician in Japan with just a 2-year investment...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news1.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    Many young Myanmar people, including myself, go abroad to work in order to change their lives...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news2.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    As an opportunity to become a recognized technician in Japan with just a 2-year investment...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news3.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    JLPT, short for Japanese Language Proficiency Test, is an internationally recognized Japanese
                    proficiency test...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
            <div class="newsDtil">
                <img src="{{ asset('img/news4.jpg') }}" class="newsImg" />
                <p class="newTxt">
                    An opportunity to become a recognized technician in Japan with just a 2-year investment...
                </p>
                <a href="{{ route('newsDtil', ['locale' => $locale]) }}" class="cta2">
                    <span>{{ __('message.more') }}</span>
                    <svg viewBox="0 0 13 10" height="10px" width="15px">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- about us end -->
</main>
@endsection('content')
