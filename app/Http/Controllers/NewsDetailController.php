<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;


class NewsDetailController extends Controller
{

    protected $respond;
    public function __construct()
    {

        $this->respond = [
            'locale' => "",
            'active' => "newsDtil",

        ];
    }

    public function index()
    {

        $respond = $this->respond;
        return view('newsDtil', compact('respond'));
    }
}
