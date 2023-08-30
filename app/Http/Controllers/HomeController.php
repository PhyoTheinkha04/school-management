<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    protected $respond;
    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "home",
        ];
    }

    public function index()
    {
        $respond = $this->respond;
        return view('welcome', compact('respond'));
    }
}
