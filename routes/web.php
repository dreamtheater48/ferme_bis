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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','ClientController@home')->name('root_path');

Route::get('/shop','ClientController@shop')->name('shop_path');

Route::get('/panier','ClientController@panier')->name('panier_path');

Route::get('/client_login','ClientController@client_login')->name('login_path');

Route::get('/signup','ClientController@signup')->name('signup_path');

Route::get('/paiement','ClientController@paiement')->name('paiement_path');

Route::get('/admin','AdminController@dashboard')->name('dashboard_path');