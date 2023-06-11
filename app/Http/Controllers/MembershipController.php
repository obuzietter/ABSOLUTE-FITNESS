<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
class MembershipController extends Controller
{
    public function postMembership(Request $request){
        
        $membership = new Membership();
        $membership->user_id = $request->user_id;
        $membership->first_name = $request->first_name;
        $membership->last_name = $request->last_name;
        $membership->email = $request->email;
        $membership->package_name = $request->package_name;
        $membership->duration = $request->duration;
        $membership->price = $request->price;
        $membership->start_date = $request->start_date;
        $membership->phone = $request->phone;
        $membership->end_date = $request->end_date;
        $membership->status= $request->status;
        
        $membership->save();
        


        
    }
}
