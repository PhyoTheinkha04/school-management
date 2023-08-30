<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    protected $respond;
    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "contact",
        ];
    }
    public function index()
    {
        $respond = $this->respond;
        return view('contact', compact('respond'));
    }

}
