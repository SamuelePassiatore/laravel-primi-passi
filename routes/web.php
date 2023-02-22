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
    $phrase = 'Hello World! I am a new laravel user';
    $pages = ['Homepage', 'Products', 'Blog', 'Pricing', 'About Us', 'Contacts', 'FAQ'];
    //return view('home', ['phrase' => $phrase]);
    return view('home', compact('phrase', 'pages'));
});
