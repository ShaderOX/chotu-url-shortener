<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store()
    {
        $remember = request()->has('remember_me');

        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt(request(['email', 'password']), $remember)) {
            return back()->with('status', 'Invalid user credentials.');
        }

        return redirect()->intended();
    }
}
