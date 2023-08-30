<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Helper\UrlGenerateController;


class LocalClassController extends Controller
{
    protected $respond;
    public function __construct()
    {
        $this->respond = [
            'locale' => "",
            'active' => "local",
        ];
    }

    public function index()
    {
        $respond = $this->respond;
        return view('local', compact('respond'));
    }
}
