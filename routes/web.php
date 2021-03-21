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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('barang','BarangController');
Route::resource('gatepass','GatepassController');
Route::group(['prefix' => 'gatepass'],function(){
  
    Route::post('paraf','GatepassController@paraf')->name('gatepass.paraf');
});