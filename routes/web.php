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
    return view('index');
});
Route::get('embauche', function () {
    return view('jobs');
});
Route::get('equipe', function () {
    return view('team');
});
Route::get('comment', function () {
    return view('how-we-work');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('developer', function () {
    return view('developer');
});
