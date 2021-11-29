<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirebaseController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home_page', function () {
    return view('home_page');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::get('/firebase-phone-authentication', [FirebaseController::class, 'index']);

