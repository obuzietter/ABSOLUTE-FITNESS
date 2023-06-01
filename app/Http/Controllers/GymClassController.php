<?php

namespace App\Http\Controllers;

use App\Models\GymClass;
use Illuminate\Http\Request;

class GymClassController extends Controller
{
    public function bookClass(Request $request){
        $class = new GymClass();
        $class->phone = $request->phone;
        $class->class_type = $request->class_type;
        $class->start_date = $request->start_date;
        $class->end_date = $request->end_date;
        $class->save();
    }
}
