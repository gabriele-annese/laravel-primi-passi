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
    return view('homepage', [
        'title' => 'Welcome Laravel',
        'paragraph' => 'lore ipsum...'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'paragraph' => 'lore ipsum...'
    ]);
});

Route::get('/news', function () {
    return view('news', [
        'title' => 'News',
        'paragraph' => 'lore ipsum...'
    ]);
});

