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
    $name = 'Car';
    $age = 32;
    $tasks = [
        'Do your shit',
        'Clear the cache',
        'install composer'
    ];
    return view('welcome', compact('name','age', 'tasks'));
});

Route::get('about', function() {
    return view('About Us');
});