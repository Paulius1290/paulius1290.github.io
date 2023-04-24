<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('home');
    }

    public function ltindex()
    {
        return view('lt.apiemus');
    }
    public function enindex()
    {
        return view('en.apiemus');
    }
    public function ltkontaktai()
    {
        return view('lt.kontaktai');
    }
    public function enkontaktai()
    {
        return view('en.kontaktai');
    }
}
