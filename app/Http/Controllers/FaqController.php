<?php

namespace App\Http\Controllers;

use App\Models\QandA;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FaqController extends Controller
{
     protected $respond;
    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "faq",
        ];
    }
    public function index()
    {
        $this->respond['faq'] = QandA::get();
        $respond = $this->respond;
        return view('faq', compact('respond'));
    }
}
