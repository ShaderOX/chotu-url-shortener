<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyURLs extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $urls = request()->user()->urls()
            ->orderBy('created_at', 'desc')
            ->paginate(10);


        return view('dashboard.my-urls', [
            'urls' => $urls,
        ]);
    }
}
