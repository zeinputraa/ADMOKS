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
    return view('index');
});
Route::get('/index.html', function () {
    return view('index');
});
Route::get('/dashboard-finance.html', function () {
    return view('dashboard-finance');
});
Route::get('/dashboard-influencer.html', function () {
    return view('dashboard-influencer');
});
Route::get('/dashboard-sales.html', function () {
    return view('dashboard-sales');
});
Route::get('/ecommerce-product.html', function () {
    return view('dashboard-product');
});
Route::get('/dashboard-product-checkout.html', function () {
    return view('dashboard-product-checkout');
});
Route::get('/dashboard-product-singel', function () {
    return view('dashboard-product-singel');
});
Route::get('/influencer-finder.html', function () {
    return view('influencer-finder');
});
Route::get('/influencer-profile.html', function () {
    return view('influencer-prfile');
});