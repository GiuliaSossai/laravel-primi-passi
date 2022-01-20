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
    $data = [
        'user' => 'Amelia Mary Earhart',
        'attempts' => [
            "17 marzo 1937",
            "1 giugno 1937",
            "2 luglio 1937"
        ],
        'first_woman' => true,
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about_us');
})->name('chi siamo');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contatti');
