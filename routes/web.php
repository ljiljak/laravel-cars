<?php

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
use \App\Http\CarsController;

Route::get('/', function () {
   	$name = 'Aleksandar Ljiljak';
	$age = 37;

	$dateForView = compact(['name', 'age']);

    return view('welcome', $dateForView);


});
Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', 'CarsController@index');

Route::get('/cars/{id}', 'CarsController@show')->name('single-car');