<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $comics = config('db');

    $navLinks = [
        "Characters",
        "Comics",
        "Movies",
        "Tv",
        "Games",
        "Collectibels",
        "Videos",
        "Fans",
        "News",
        "Shop",
    ];


    return view('home', compact('comics', 'navLinks'));
})->name('home');
