<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{

    public function index($locale)
    {
        App::setlocale($locale);
        $locale = App::currentLocale();
        var_dump($locale);
        var_dump(url()->previous());
        $active = "home";
        $respond = [
            'locale' => $locale,
            'active' => $active
        ];

        $url = url()->previous();
        $newUrl = $this->rearrangeSegment($url,$locale);
        $newUrl = rtrim($newUrl, '/');

        // return view('welcome', $respond);
        return redirect($newUrl);
    }
    public function login($locale)
    {
        App::setlocale($locale);
        return view('login');
    }
  public function register($locale)
    {
        App::setlocale($locale);
        return view('register');
    }

    private function rearrangeSegment($url, $locale)
    {
        $parsedUrl = parse_url($url);
        $languages = ['en','ja','mm'];

        if (isset($parsedUrl['path'])) {
            $pathSegments = explode('/', $parsedUrl['path']);
            // Remove any language codes from the path segments
            $filteredSegments = array_filter($pathSegments, function ($segment) use ($languages) {
                return !in_array($segment, $languages);
            });

            // Rebuild the URL with the remaining segments
            return url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/". $locale . implode('/', $filteredSegments));
        } else {
            return $url;
        }
    }
}
