<?php

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
    return view('welcome');
});
//route for getting home page
Route::get('/home',[AuthController::class,'landingPage'])->middleware('isLoggedIn');


//routes for getting login and registration pages
Route::get('/login', [AuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [AuthController::class, 'register']);

//routes for posting 
Route::post('/register-user', [AuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [AuthController::class, 'loginUser'])->name('login-user');

//route for logging out
Route::get('/logout', [AuthController::class, 'logOut']);