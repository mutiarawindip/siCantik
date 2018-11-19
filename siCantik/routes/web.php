<?php

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
    return view('welcome');
});
Route::get('about', function () { //sesuai a href
    return view('layouts.master');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('products', function () { //sesuai a href
    return view('layouts.products');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
