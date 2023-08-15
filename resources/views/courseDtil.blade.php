@extends('layouts.master2')
@section('content')
    <main>
        <div class="classroom">
            <div class="classroom-content">
            <p class="searchTitle">Find your courses</p>
            <form class="search-focus">
                <input type="text" name="search" class="search" autocomplete="off">
            </form>


            <div class="courseDtil">
                <img src="img/ad2.png" alt="">
                <p class="classdtil">
                    New class schedule for IT 2 Year Plan has been released
                    <br>
                    🌸 Even though schools are closed, this class is convenient for students who are interested in technology and want to continue their education.
                    <br>
                    🌸 Topics to be taught
                    <br>
                    1) computer based Web Design Basics Basic and Advanced Web Coding
                    <br>
                    2) ITPEC ( IP )
                    <br>
                    3) ITPEC ( FE )
                    <br>
                    4) OnJob Training (3 Months) (Note: Must have a class attendance rate of 80% or above. Only those who can submit projects in class will receive Onjob Training.)
                    <br>
                </p>
            </div>
            </div>


        </div>
        <p class="title8">Related courses</p>
         <ul class="relatedClass">
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>
                <li class="classes2">
                    <img src="img/n5.jpg" alt="" class="classImg">
                    <p class="classTitle">Basic N5</p>
                    <p class="classType">Online class</p>
                    <button><a href="course_dtil.html">More detail</a></button>
                </li>

            </ul>
    </main>
@endsection
