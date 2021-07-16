<?php

use Illuminate\Support\Facades\Route;
use Suppliers\Http\Controllers\testController;
use Suppliers\Http\Controllers\SupplierController;
use Suppliers\Http\Controllers\SupplierWalletController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Suppliers\Http\Controllers\SupplierWalletTransactionController;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.Suppliers'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','web']
    ],
    function () { //...

            //test hmvc
            Route::get('try',[testController::class,'test'])->middleware('SupplierTestMiddleware');

               // supplier wallet
               Route::resource('suppliers', SupplierController::class);
               Route::get('supplier-wallet', [SupplierWalletController::class, 'getSupplierWallet'])->name('get.supplier.wallet');
               Route::get('supplier-wallet-trans/{suppplier}', [SupplierWalletController::class, 'getSupplierWalletTrans'])->name('get.supplier.wallet.trans');
               Route::resource('supplier-wallet-transactions', SupplierWalletTransactionController::class);
    });

