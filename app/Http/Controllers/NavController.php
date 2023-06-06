<?php

namespace App\Http\Controllers;

use App\Models\GymClass;
use App\Models\Trainer;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

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
        $data = array();

        if (Session::has('sessionID')) {
            $data = User::where('user_id', '=', Session::get('sessionID'))->first();

        }
        $classes = array();
        $classes = GymClass::all();        
        return view('classes', compact('data', 'classes'));
    }
    public function trainer()
    {
        $trainers = array();
        $trainers = Trainer::all();
        return view('trainer', compact('trainers'));
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