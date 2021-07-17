<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Users\Http\Controllers\users\UserController;
use Users\Http\Controllers\UserWallet\UserWalletController;
use Users\Http\Controllers\UserWalletTransactions\UserWalletTransactionController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.Users'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','web','auth']
    ],
    function () {
        // Route::get('ttest', [UserController::class, 'testing'])->middleware('UserMiddleware');
        Route::resource('users', UserController::class);
        Route::get('profile', [UserController::class, 'profileEdit'])->name('profile.edit');
        Route::put('profile', [UserController::class, 'profileUpdate'])->name('profile.update');
        Route::put('profile-password', [UserController::class, 'profilePassword'])->name('profile.password');
        // user wallet
        Route::get('user-wallet', [UserWalletController::class, 'getWallet'])->name('get.user.wallet');
        Route::resource('user-wallet-transactions', UserWalletTransactionController::class);
    }
);