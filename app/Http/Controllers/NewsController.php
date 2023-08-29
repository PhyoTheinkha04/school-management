<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;

class NewsController extends Controller
{
    protected $respond, $locale;
    public function __construct()
    {
        $url = url()->current();
        $newUrl = UrlGenerateController::rearrangeSegment($url);
        $this->respond = [
            'locale' => "",
            'active' => "news",
<<<<<<< HEAD
            'url' => $newUrl,
        ];
    }

    public function index($locale = 'en')
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;
        $respond = $this->respond;
        return view('news', compact('respond'));
    }
=======
            'url'    => $newUrl,
        ];
    }
    public function index($locale)
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;
        $this->respond['news'] = News::get();
        $respond = $this->respond;
        return view('news', compact('respond'));
    }
    public function view($locale, $id)
    {
        App::setlocale($locale);
        $this->respond['locale'] = $locale;
        $this->respond['news_detail'] = News::find($id);

        $respond = $this->respond;
        return view('newsDtil', compact('respond'));
    }

>>>>>>> 79afd946f78f7cc258b9f2d507425cd180b4c7d5
}
