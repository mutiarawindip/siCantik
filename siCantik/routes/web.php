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
    return view('about');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('products', function () { //sesuai a href
    return view('products');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('dry', function () { //sesuai a href
    return view('products.dry');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('normal', function () { //sesuai a href
    return view('products.normal');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('oily', function () { //sesuai a href
    return view('products.oily');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('articles', function () { //sesuai a href
    return view('articles');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('contact', function () { //sesuai a href
    return view('contact');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('articlesDetail', function () { //sesuai a href
    return view('articlesDetail');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});

