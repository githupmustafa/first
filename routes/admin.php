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

Route::get('/', function () {
    return view('welcome');
});
//This is route without parameter
Route::get('/test', function () {
    return 'Hi Mustafa';
});

//This is route with parameter 
Route::get('/test1/{id}', function ($id) {
    return 'Hi ee'.$id;
});

//This is route with parameter optional
Route::get('/test2/{id?}', function () {
    return 'Hi here is optional parameter';
});
//This is route with parameter optional
Route::get('/test3', function () {
    return 'Hi here is route with name';
})->name('ali');
