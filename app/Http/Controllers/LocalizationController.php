<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    // public $request;
    // public function __construct(Request $request) {
    //     $this->request = $request;
    // }
    public function index($locale)
    {

        App::setlocale($locale);
        $locale = App::currentLocale();
        $active = "home";
        $respond = [
            'locale' => $locale,
            'active' => $active
        ];
        return view('welcome', compact('respond'));
    }
    public function login($locale)
    {
        App::setlocale($locale);
        return view('login');
    }
  public function register($locale)
    {
        App::setlocale($locale);
        return view('register');
    }
}
