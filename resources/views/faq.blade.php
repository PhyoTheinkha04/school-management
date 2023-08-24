@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt2 margin">{{ __('message.faq') }}</p>
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
    <section class="faq">
        <div class="faq-content">
            <div class="faq-left pc">
                <h3 class="faq-title"> {{ __('message.FAQ') }}<br> {{ __('message.FAQ1') }}<br>{{ __('message.FAQ2') }}</h3>
            </div>
            <div class="faq-right">
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        {{ __('message.jlpt?') }}
                        </div><!-- /.accordion-item-header -->
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            {{ __('message.jlpt-content') }}
                            </div>       
                        </div><!-- /.accordion-item-body -->
                    </div><!-- /.accordion-item -->
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        {{ __('message.jlpt?') }}
                        </div><!-- /.accordion-item-header -->
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            {{ __('message.jlpt_content') }}
                            </div>
                        </div><!-- /.accordion-item-body -->
                    </div><!-- /.accordion-item -->
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        {{ __('message.jlpt?') }}
                        </div><!-- /.accordion-item-header -->
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            {{ __('message.jlpt-content') }}
                            </div>
                        </div><!-- /.accordion-item-body -->
                    </div><!-- /.accordion-item -->
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        {{ __('message.jlpt?') }}
                        </div><!-- /.accordion-item-header -->
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            {{ __('message.jlpt-content') }}

                            </div>
                        </div><!-- /.accordion-item-body -->
                    </div><!-- /.accordion-item -->
                </div>
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        {{ __('message.jlpt?') }}
                        </div><!-- /.accordion-item-header -->
                        <div class="accordion-item-body">
                            <div class="accordion-item-body-content">
                            {{ __('message.jlpt-content') }}
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
