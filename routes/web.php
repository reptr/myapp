<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// mengatur halaman dibrowser (Server side)

// Route::get('/', function () {
//     return view('welcome');//ke resources -> view -> welcome.blade.php
// });

// Route::get('/', function () {
//     // return '<h1>Laravel 7</h1>';
//     return view('welcome');
// });

// Route::get('/contact', function () {
//     return 'Contact Us';
// });

// return view tanpa controller
// Route::view('/','welcome');
// Route::view('contact','contact');
// Route::view('series/create','series.create'); //  series/create , bisa juga pake slash
// Route::view('series/test','series.test.testing'); // series/test/create  , file dlm folder


// Route::get('/', function(){
//     // $name = "Tim Hore";
//     $name = "<h1>Tim Hore</h1>";
//     $postBody = "Lorem ipsum  ,,,,,,,,
//     lorem ipsum .........
//     lorem ipsum ,,,,,,,,,";
//     return view('welcome', ['name' => $name, 'body' => $postBody]);
// });

Route::get('/', function(){
    return view('home');
});

// Route::view('contact','contact');

// Route::get('contact', function(Request $request){
//     // return $request->fullUrl(); //menampilkan full url
//     return $request->path() == 'contact' ? 'true' : 'false'; //$request->path , menampilkan path nya
//     // return view('home');
// });

// Route::get('contact', function(){
//     // return request()->path() == 'contact' ? 'sama' : 'tidak';
//     return request()->is('contact') ? 'sama' : 'tidak';
// });

Route::view('contact','contact');
Route::view('about','about');
Route::view('login','login');
