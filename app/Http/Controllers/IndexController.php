<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $ip = str_replace('-', '.',$request->ip);
        $type = $request->type;
        $location = \GeoIP::getLocation($ip);
        return $location[$type];
    }
}
