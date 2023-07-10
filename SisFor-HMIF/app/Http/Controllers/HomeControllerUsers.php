<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeControllerUsers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
{
    if (Auth::check()) {
        return view('home');
    } else {
        return view('NAuth.home');
    }
}
}
