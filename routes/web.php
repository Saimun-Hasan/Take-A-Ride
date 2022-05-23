<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\dashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Users-Route
Route::get('/home', function () {
    return view('users.index');
})-> name('home');






//register-login-logout
Route::get('/signup', [RegisterController::class, 'create'])-> middleware ('guest');
Route::post('/signup', [RegisterController::class, 'store'])-> middleware ('guest')-> name('signup');

Route::get('/login', [SessionsController::class, 'create'])-> middleware ('guest');
Route::post('/login', [SessionsController::class, 'store'])-> middleware ('guest')-> name('login');
Route::post('logout', [SessionsController::class, 'destroy'])-> middleware ('auth');

Route::get('/cars', [dashboardController::class, 'create'])-> middleware ('auth')-> name('cars');


