<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {

        return view("auth.login");
    }

    public function register()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:16'
        ]);

        $user = new User();
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $reg_success = $user->save();

        if ($reg_success) {
            return back()->with('success', 'Account created successfully!');
        } else {
            return back()->with('error', 'Something went wrong!');
        }




    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3|max:16'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('sessionID', $user->user_id);
                return redirect('/dashboard');

            } else {
                return back()->with('fail', 'Invalid Password');
            }
        } else {
            return back()->with('fail', 'This Email is not registered!');
        }


    }

    public function dashboard()
    {
        $data = array();

        if (Session::has('sessionID')) {
            $data = User::where('user_id', '=', Session::get('sessionID'))->first();

        }
        return view('dashboard', compact('data'));
        
    }

  
    public function logOut()
    {
        if (Session::has('sessionID')) {
            // Session::forget('sessionID');
            Session::pull('sessionID');
            return redirect('/login');
        }
    }
}