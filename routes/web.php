<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContorller;
use App\Http\Controllers\GalleryContorller;
use App\Http\Controllers\ContactContorller;
use App\Http\Controllers\AboutContorller;
use App\Http\Controllers\DonateContorller;
use App\Models\SiteInfo;

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
    return view('frontend.index' );
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/donate', function () {
    return view('frontend.donate');
});
Route::resource('SiteInfo','App\Http\Controllers\SiteInfoController');
