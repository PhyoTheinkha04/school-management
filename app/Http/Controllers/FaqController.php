<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;

class FaqController extends Controller
{
     protected $respond, $locale;
    public function __construct()
    {
        $url = url()->current();
        $newUrl = UrlGenerateController::rearrangeSegment($url);
        $this->respond = [
            'locale' => "",
            'active' => "faq",
            'url' => $newUrl,
        ];
    }
    public function index($locale)
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;
        $respond = $this->respond;
        return view('faq', compact('respond'));
    }
}
