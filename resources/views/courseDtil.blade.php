@extends('layouts.master')
@section('content')
<div class="headerTxt pc">
    <p class="txt2 margin">{{ __('message.coursesDtil') }}</p>
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
    <div class="classroom2">
        <p class="searchTitle2">{{ $respond['course']->title }}</p>
        <div class="classroom-content2">


            <div class="courseDtil2">
                <img src="{{ asset('storage/'.$respond['course']->image) }}" alt="">

            </div>
            <p class="classdtil">
                {{ $respond['course']->contents }}
                <h2>Batch Detail</h2>
                <div class="batch">

                    @if (isset($respond['course']) && count($respond['course']->batches) > 0)
                    @foreach ($respond['course']->batches as $batch)
                    <ul>
                        <li>{{ $batch->name }}</li>
                        <li>{{ $batch->cost }} MMK</li>
                        <li>{{ $batch->description }}</li>
                        <li>{{ $batch->start_at }}</li>
                        <li>{{ $batch->end_at }}</li>
                    </ul>

                    <div class="cls-btn">
                        <button class="loginBtn2">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <a href="" class="front text">Enroll</a>
                        </button>
                        <button class="loginBtn2">
                            <span class="shadow"></span>
                            <span class="edge"></span>
                            <a href="" class="front text">Instructor Name</a>
                        </button>
                    </div>
                    @endforeach
                    @endif

                </div>
            </p>



        </div>
    </div>

    <p class="title8">Related courses</p>
    <div>
        <ul class="relatedClass">
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>
            <li class="classes2">
                <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                <p class="classTitle">Basic N5</p>
                <p class="classType">Online class</p>
                <button class="loginBtn2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <a href="" class="front text">{{ __('message.moredtil') }}</a>
                </button>
            </li>

        </ul>
    </div>

</main>
@endsection
