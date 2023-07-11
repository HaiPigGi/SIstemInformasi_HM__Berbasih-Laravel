<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeControllerKepengurusan extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
{
    return view('Kepengurusan.index');
}

}
