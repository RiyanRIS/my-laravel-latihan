<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('/hello', [HelloController::class, 'hello']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::group(['my'], function(){
        Route::get('dashboard', 'MyController@dashboard')->name('my/dashboard');
        Route::get('profile', 'MyController@profile')->name('my/profile');
        Route::get('activities', 'MyController@activities')->name('my/activities');
        Route::get('settings', 'MyController@settings')->name('my/settings');
    });
    // Route::get('/', function () {
    //     // Uses first & second Middleware
    // });
 
    // Route::get('user/profile', function () {
    //     // Uses first & second Middleware
    // });
});



Route::get('/home', 'HomeController@index')->name('home');
