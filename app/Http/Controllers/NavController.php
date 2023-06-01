<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function classes()
    {
        return view('classes');
    }
    public function trainer()
    {
        return view('trainer');
    }
    public function membership()
    {
        return view('membership');
    }
    public function contact()
    {
        return view('contact');
    }
}