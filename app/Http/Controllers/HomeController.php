<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\News;
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
        $this->respond['instructor'] = Instructor::all();
        $this->respond['news'] = News::all();
        $respond = $this->respond;
        return view('welcome', compact('respond'));
    }
}
