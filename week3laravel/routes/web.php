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
// */
// // / -> artinya halaman pertama yang dibuka oleh laravel
// Route::get('/', function () {
//     return view('index'); // memanggil apa yang ada di folder view
// });
Route::view('/', 'index',
[
    "pagetitle" => "Home",
    "maintitle" => "Welcome To  My Library"
]
);
// cara lebih simple
Route::view('/tentangkita', 'about',
[
    "pagetitle" => "About Us",
    "maintitle" => "About My Library"
]
);
// url, namafile
Route::view('/kontakkita', 'contact',
[
    "pagetitle" => "Contacts",
    "maintitle" => "Contact Data"
]
);
