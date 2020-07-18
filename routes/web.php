<?php

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

//  Gestion
Route::group(['prefix' => 'gestion'], function() {

    //  Dashboard
    Route::group(['prefix' => 'dashboard'], function() {

        Route::get('index', 'DasboardController@index')
            ->name('dashboard.index');

    });

    //  Usuarios
    Route::resource('users', 'UserGestionController');

});

