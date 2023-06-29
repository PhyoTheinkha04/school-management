<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function index($locale)
    {
        App::setlocale($locale);
        return view('welcome');
    }
    public function login($locale)
    {
        App::setlocale($locale);
        return view('login');
    }

}
