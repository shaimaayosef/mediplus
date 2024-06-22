<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;

Route::group(
    [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
                    Route::get('/', function () {
                        return view('test');
                    });
                    Route::post('/',[FrontPages::class,'home'])->name('home');
                });