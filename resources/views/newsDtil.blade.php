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
            <h3>Programmer work and Japan</h3>
            <img src="{{ asset('img/news1.jpg') }}" class="newsImg2">

            <p class="newTxt2">
                Regarding the programmer job, in 6th of 2011, when I was in my second year of San Moon (college) in Tokyo,
                I started an internship at a company that provides services ranging from web development. I was the first
                foreigner to get a job at the same company. The reason I got it was because I passed the basic IP exam of
                ITPEC and got it through the introduction of the IP teacher. When I started my internship, I was
                paid 50,000 yen a month. I have to go to the company at least 2 times a week. Then I have to send
                the accepted work. 50,000 yen is 50 hours of income if you work part-time outside. At first, I got greedy
                and did not reduce my part-time work, and I was happy because the intern earned income, but I did not have
                time to study and I was not able to work well for the intern company because I did not have enough time
                to study. Because of what I'm doing with programming, I have to design simple websites. The programming
                languages used are HTML, CSS, JavaScript, Ajax. And we can run websites with a CMS system called Wordpress.
                When I got some experience, I used PHP to design voting systems. The company I worked for was not a big
                company, so I had to do most of the work alone from beginning to end. So I think I got more education.
                As a reminder, I had to write the model voting system of a famous brand by myself, and I also had to
                monitor the situation all night for about 1 week from the day the voting started. A programmer feels
                stress unlike others while developing, and feels an indescribable joy when he shows what he has done
                in front of the public. At that time, I believed in myself more and had more strength to move forward.
                I had no knowledge of programming until I came to Japan. I have changed a lot in the 2 years since
                I joined the internship and I have been able to write a lot. If I were to tell you my own opinion,
                even a college in Japan is as uncomfortable as Burma in terms of teaching. Since they follow a self-study
                approach, Japanese teachers give advice rather than teaching. There are a lot of foreigners who can't
                go there. Their teaching style is independent. There are many cases where a student can reach the East
                as much as they put in the effort, and those who don't put in the effort are completely left behind.
                Apprenticeship in Japan is not an on-the-job training, but is a practice where you are forced to work
                alone and give advice if you make a mistake, so it is not easy. For the first 6 months, I felt like
                I was falling. If we can overcome that, we must have the attitude that Nirvana is near. While working
                as a programmer among Japanese people, I noticed that Burmese are not bad either. Diligence Viriya
                and wisdom can be compared to the Japanese. There is little that cannot be compared. Be careful and
                prepare in advance. Myanmar is weak in those areas. I often think about a job casually. Those weak
                principles will be the weakness of Burmese including myself. There is a lot to learn from working
                with them. Therefore, I believe that I should study and imitate their way of thinking rather than
                whether it is convenient or not for them personally.


            </p>

    </section>
    <!-- about us end -->
</main>
@endsection('content')
