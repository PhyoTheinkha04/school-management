<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AboutController extends Controller
{
    protected $respond;
    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "about",
        ];
    }

    public function index()
    {
        $respond = $this->respond;
        return view('about', compact('respond'));
    }

}
