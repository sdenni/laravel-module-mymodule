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

Route::prefix('mymodul')->group(function() {
    Route::get('/', 'MymodulController@index');
    Route::get('/test', 'MymodulController@mytest');
});
