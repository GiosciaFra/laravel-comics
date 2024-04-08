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

    $footerLinks = [

        [
            "title" => 'dc comics',
            "links" => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
        ],
        [
            "title" => 'shop',
            "links" => ['Shop DC', 'Shop DC Collectibles']
        ],
        [
            "title" => 'dc',
            "links" => ['Terms of Use', 'Privacy Policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshop', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us']
        ],
        [
            "title" => 'sites',
            "links" => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
        ],
    ];

    $socials = [

        [
            "name" => 'facebook',
            "icon" => '/resources/img/footer-facebook.png'
        ],

        [
            "name" => 'twitter',
            "icon" => '/resources/img/footer-twitter.png'
        ],

        [
            "name" => 'youtube',
            "icon" => '../resources/img/footer-youtube.png'
        ],

        [
            "name" => 'pinterest',
            "icon" => '../img/footer-pinterest.png'
        ],

        [
            "name" => 'periscope',
            "icon" => '/resources/img/footer-periscope.png'
        ],
    ];


    return view('home', compact('comics', 'navLinks', 'footerLinks', 'socials'));
})->name('home');
