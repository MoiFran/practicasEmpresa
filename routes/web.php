<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\rolOneController;
use App\Http\Controllers\rol2Controller;

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


/* Route::get('/register', [RegisterController::class, 'show']);
Route::post('/action-register', [RegisterController::class, 'register']); */

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */

    Route::get('/', function () {
        return view('home.index');
    });
    
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/rol1', 'rolOneController@show')->name('auth.partials.rolOne');
    Route::get('/rol2', 'rol2Controller@show')->name('auth.partials.rol2');

    //Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');


        
    //});

    Route::group(['middleware' => ['auth']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
