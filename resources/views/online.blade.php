 @extends('layouts.master')
 @section('content')
 <div class="headerTxt pc">
     <p class="txt2 margin">{{ __('message.online') }}</p>
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
     <div class="classroom">
         <div class="classroom-content">
             <p class="searchTitle">Find your courses</p>
             <form class="search-focus">
                 <input type="text" name="search" class="search" autocomplete="off">
             </form>
             <div class="menuGroup">
                 <div class="menu-btn">
                     <div class="line line--1"></div>
                     <div class="line line--2"></div>
                     <div class="line line--3"></div>
                 </div>
                 <div class="classnav">
                     <div class="nav-cat">
                         <div class="nav-links">
                             <p class="navTitle">Categories</p>
                             <a href="" class="link">Japanese</a>
                             <a href="" class="link">English</a>
                             <a href="" class="link">ITPEC</a>
                             <a href="" class="link">Web development</a>
                             <hr class="line">
                             <p class="navTitle">Classes</p>
                             <a href="" class="link">Online class</a>
                             <a href="" class="link">Local class</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <ul class="class_container">
             <li class="classes">
                 <img src="{{ asset('img/n5.jpg') }}" alt="" class="classImg">
                 <p class="classTitle">Basic N5</p>
                 <p class="classType">Online class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>

             <li class="classes">
                 <img src="{{ asset('img/N4.jpg') }}" alt="" class="classImg">
                 <p class="classTitle">New N4 class</p>
                 <p class="classType">Online class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>

             <li class="classes">
                 <img src="{{ asset('img/n3.jpg') }}" alt="" class="classImg">
                 <p class="classTitle">New N3 class</p>
                 <p class="classType">Online class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>

             <li class="classes">
                 <img src="{{ asset('img/free.png') }}" alt="" class="classImg">
                 <p class="classTitle">Free Basic</p>
                 <p class="classType">local class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>
             <li class="classes">
                 <img src="{{ asset('img/n3.jpg') }}" alt="" class="classImg">
                 <p class="classTitle">New N3 class</p>
                 <p class="classType">Online class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>

             <li class="classes">
                 <img src="{{ asset('img/free.png') }}" alt="" class="classImg">
                 <p class="classTitle">Free Basic</p>
                 <p class="classType">local class</p>
                 <button class="loginBtn2">
                     <span class="shadow"></span>
                     <span class="edge"></span>
                     <a href="{{ route('courseDtil', ['locale' => $locale]) }}" class="front text">More Detail</a>
                 </button>
             </li>
         </ul>
     </div>
 </main>
 @endsection('content')
