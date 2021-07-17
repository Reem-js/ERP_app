<?php
use Illuminate\Support\Facades\Route;
use Stocks\Http\Controllers\testController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//test hmvc
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.stocks'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
        
    });
