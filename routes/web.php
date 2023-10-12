<?php

use Illuminate\Support\Composer;
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
    $title = 'Laravel Comics';
    return view('home', compact('title'));
})->name('home');

Route::get('comics', function () {
    $comics_list = config('comics');
    $title = 'Current series';
    return view('comics', compact('title', 'comics_list'));
})->name('comics');