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


Route::get('habitaciones/create', 'HabitacionesController@getCreate');


Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', 'HomeController@index');
    
    Route::group(['prefix' => 'habitaciones'], function(){

        Route::get('/', 'HabitacionesController@getIndex');

        Route::get('show/{id}', 'HabitacionesController@getShow');

        Route::get('edit/{id}', 'HabitacionesController@getEdit');

        Route::post('create', 'HabitacionesController@postCreate');

        Route::put('edit/{id}', 'HabitacionesController@putEdit');

        Route::put('cambiaReservada/{id}', 'HabitacionesController@cambiaReservada');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
