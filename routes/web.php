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
    return view('home');
});


Route::get('/test', function () {
    return view('home_test');
});

Route::get('foo', function () {
    return 'Hello World';
});


Route::get('/user', 'TestController@index');

/*Route::get('/user', function () {
    return view('home_test');
}); */


Route::get('user/profile', function () {
   return 'calling user/profile';
})->name('profile');


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
})->where('id', '[0-9]+');



Route::get('role',[
   'middleware' => 'Role:editor2',
   'uses' => 'TestController@index',
]);