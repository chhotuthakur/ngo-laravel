<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContorller;
use App\Http\Controllers\GalleryContorller;
use App\Http\Controllers\ContactContorller;
use App\Http\Controllers\AboutContorller;
use App\Http\Controllers\DonateContorller;
use App\Models\SiteInfo;
use App\Models\SystemSettings;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\DB;

Route::get('/',function(){



try {


if (SystemSettings::count()) {
    return view('frontend.index');
}else {
    return view('frontend.install');
}

    
} catch (Exception $e) {
    return view('frontend.install');
}

});

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



 
Route::get('showdata','ShowDataController@index');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
