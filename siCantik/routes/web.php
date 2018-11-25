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

Route::get('adminLogin', function () {
    return view('admin.login');
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
Route::get('register', function () { //sesuai a href
    return view('admin.register');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('dashboard', function () { //sesuai a href
    return view('admin.dashboard');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('adminProduct', function () { //sesuai a href
    return view('admin.product');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::get('adminArticles', function () { //sesuai a href
    return view('admin.articles');	//sesuai nama file di view layouts = nama folder, master = nama file, dipisahkan dengan tanda titik
});
Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
