<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\GymClassController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('splash');
});
//route for getting home page
Route::get('/dashboard',[AuthController::class,'dashboard'])->middleware('isLoggedIn');


//routes for getting login and registration pages
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [AuthController::class, 'register']);

//routes for posting registration and login details
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');

//route for logging out
Route::get('/logout', [AuthController::class, 'logOut']);

//navbar routes
Route::get("about", [NavController::class, 'about']);
Route::get("classes", [NavController::class, 'classes']);
Route::get("trainer", [NavController::class, 'trainer']);
Route::get("membership", [NavController::class, 'membership']);
Route::get("contact", [NavController::class, 'contact']);

//Route for posting class booking data
// Route::post('/book-class', [GymClassController::class, 'bookClass'])->name('book-class');
//Route for posting trainer booking data
Route::post('/book', [BookingController::class, 'bookNow'])->name('book');

//Route for posting memberships
Route::post('post-membership', [MembershipController::class, 'postMembership'])->name('post-membersip');
//test route
Route::post('testpost', [TestController::class, 'display'])->name('go');

//route for mpesa payment
Route::get('pay', [PayController::class, 'stk']);
