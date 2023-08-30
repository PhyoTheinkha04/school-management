<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NewsController extends Controller
{
    protected $respond;


    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "news",
        ];
    }

    public function index()
    {
        $this->respond['news'] = News::get();
        $respond = $this->respond;
        return view('news', compact('respond'));
    }
    public function view($id)
    {
        $this->respond['news_detail'] = News::find($id);
        $respond = $this->respond;
        return view('newsDtil', compact('respond'));
    }

}
