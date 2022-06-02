<?php

namespace App\Http\Controllers;

use App\Models\UrlMapping;
use Illuminate\Http\Request;

class Redirector extends Controller
{
    public function index($suffix)
    {
        $url = UrlMapping::where('suffix', $suffix)->first();
        if ($url) {
            return redirect($url->maps_to);
        } else
            return redirect()->route('home');
    }
}
