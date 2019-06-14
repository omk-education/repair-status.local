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

Route::get('/', 'IndexController@index');
Route::post('/search', 'IndexController@search')->name('search');

Auth::routes(['register' => false]);

//> Административная часть
$groupDataAdmin = [
    'namespace' => 'Admin',
    'middleware' => 'auth',
    'prefix' => 'admin',
    'as' => 'admin.'
];
Route::group($groupDataAdmin, function () {
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
});
//<
