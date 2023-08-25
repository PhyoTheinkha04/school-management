<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;

class HomeController extends Controller
{
    protected $respond, $locale;
    public function __construct()
    {
        $url = url()->current();
        $newUrl = UrlGenerateController::rearrangeSegment($url);
        $this->respond = [
            'locale' => "",
            'active' => "home",
            'url' => $newUrl,
        ];
    }

    public function index($locale = 'en')
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;
        $respond = $this->respond;
        return view('welcome', compact('respond'));
    }
}
