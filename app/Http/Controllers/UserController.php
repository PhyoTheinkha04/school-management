<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;

class UserController extends Controller
{
    protected $respond, $locale;


    public function __construct()
    {
        $url = url()->current();
        $newUrl = UrlGenerateController::rearrangeSegment($url);
        $this->respond = [
            'locale' => "",
            'active' => "news",
            'url' => $newUrl,
        ];
    }
    public function index($locale = 'en')
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;

        $respond = $this->respond;
        return view('user', compact('respond'));
    }

}
