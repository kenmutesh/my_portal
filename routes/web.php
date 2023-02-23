<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

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
Route::get('/profile', function(){
    return view('pages.profile');
});
Route::get('/settings', function(){
    return view('pages.settings');
});
Route::group(['middleware' => 'superadmin'], function () {
    // routes that can only be accessed by superadmins
});

Route::group(['middleware' => 'admin'], function () {
    // routes that can only be accessed by admins
});

Route::group(['middleware' => 'user'], function () {
    // routes that can only be accessed by regular users
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
