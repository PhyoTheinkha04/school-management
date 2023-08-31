<?php

namespace App\Http\Controllers\Helper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UrlGenerateController extends Controller
{
    public static function rearrangeSegment($url)
    {
        $parsedUrl = parse_url($url);
        $languages = ['en','ja','mm'];

        if (isset($parsedUrl['path'])) {
            $pathSegments = explode('/', $parsedUrl['path']);

            // Remove any language codes from the path segments
            $filteredSegments = array_filter($pathSegments, function ($segment) use ($languages) {
                return !in_array($segment, $languages);
            });

            return array(
                'en' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/en" . implode('/', $filteredSegments)),
                'mm' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/mm" . implode('/', $filteredSegments)),
                'ja' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/ja" . implode('/', $filteredSegments)),
            );

        } else {
            return array(
                'en' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]"),
                'mm' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/mm"),
                'ja' => url("$parsedUrl[scheme]://$parsedUrl[host]:$parsedUrl[port]/ja"),
            );
        }
    }
}
