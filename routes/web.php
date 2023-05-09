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

    $comics = config('comics');

    // dd($comics);
    
    $links =[
        'CHARACTERS',
        'COMICS',
        'MOVIES',
        'TV',
        'GAMES',
        'COLLECTIBLES',
        'VIDEOS',
        'FANS',
        'NEWS',
        'SHOP'
    ];

    $buyImages = [
       [
          'title'=> 'DIGITAL COMICS',
            'img'=> 'resources/img/buy-comics-digital-comics.png',
        ],

       [
          'title'=> 'DC MERCHANDISE',
            'img'=> 'resources/img/buy-comics-merchandise.png',
        ],

       [
          'title'=> 'SUBSCRIPTION',
            'img'=> 'resources/img/buy-comics-shop-locator.png',
        ],

       [
          'title'=> 'COMIC SHOP LOCATOR',
            'img'=> 'resources/img/buy-comics-subscriptions.png',
        ],

       [
          'title'=> 'DC POWER VISA',
            'img'=> 'resources/imgbuy-dc-power-visa.svg',
        ]
    ];

    $footerList = [
        [
           'name' => 'DC COMICS',
           'links' => [
                'Characters',
                'Comics',
                'Movie',
                'TV',
                'Games',
                'Video',
                'News',
            ],
        ],

        [
           'name' => 'DC ',
           'links' => [

                'Terms of use',
                'Privacy policy',
                'Ad choices',
                'Advertising',
                'jobs',
                'Subscriptions',
                'Talent workshops',
                'CPSC Certificates',
                'Ratings',
                'Shop help',
                'Contact Us',

            ],
        ],

        [
           'name' => 'SITES',
           'links' => [
                'DC',
                'MAD Magazine',
                'DC kids',
                'DC Universe',
                'DC Power Visa',

            ],
        ],


        [
           'name' => 'SHOP',
           'links' => [
                'Shop DC',
                'Shop DC Collectibles',

            ],
        ],



    ];



    return view('home', compact('links','comics','buyImages','footerList'));
});





    
