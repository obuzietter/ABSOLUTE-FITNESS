<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class BookingController extends Controller
{
    public function bookNow(Request $request)
    {
        $booking = new Booking();
        $booking->first_name = $request->first_name;
        $booking->last_name = $request->last_name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->class_type = $request->class_name;
        // $booking->save();

        $sub_check = $request->class_name;

        $user = User::where('user_id', '=', Session::get('sessionID'))->first();
    
        $existingBooking = Booking::where('email', '=', $user->email)
            ->where('class_type', '=', $sub_check)
            ->exists();
    
        if ($existingBooking) {
            return back()->with('fail', 'You already have an active subscription');
        }else{

        $booking->save();
        return back()->with('success', 'You have successfully subscribed to the class');
        }

    }
}