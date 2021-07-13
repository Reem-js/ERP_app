<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Users\Http\Controllers\UserController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.users'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('ttest', [UserController::class, 'testing'])->middleware('UserMiddleware');
    }
);