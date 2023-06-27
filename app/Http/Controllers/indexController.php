<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function local()
    {
        return view('local');
    }
    public function online()
    {
        return view('online');
    }
    public function news()
    {
        return view('news');
    }
    public function newsDtil()
    {
        return view('newsDtil');
    }
    public function courseDtil()
    {
        return view('courseDtil');
    }
    public function contact()
    {
        return view('contact');
    }
    public function faq()
    {
        return view('faq');
    }
    public function profile()
    {
        return view('profile');
    }
    public function register_courses()
    {
        return view('register_courses');
    }
    public function purchase_history()
    {
        return view('purchase_history');
    }

}
