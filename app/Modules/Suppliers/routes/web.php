<?php

use Illuminate\Support\Facades\Route;
use Suppliers\Http\Controllers\SupplierController;
use Suppliers\Http\Controllers\SupplierWalletController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Suppliers\Http\Controllers\SupplierWalletTransactionController;
use Suppliers\Http\Controllers\PriceListController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.Suppliers'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','web','auth']
    ],
    function () { //...
            Route::resource('suppliers', SupplierController::class)->parameters(['suppliers' => 'supplier:slug']); //
            Route::get('supplier-wallet', [SupplierWalletController::class, 'getSupplierWallet'])->name('get.supplier.wallet');
            Route::get('supplier-wallet-trans/{suppplier}', [SupplierWalletController::class, 'getSupplierWalletTrans'])->name('get.supplier.wallet.trans');
            Route::resource('supplier-wallet-transactions', SupplierWalletTransactionController::class);
            Route::get('datatables',[SupplierController::class,'suppllierData'])->name('suppllier.data');
            Route::resource('priceLists', priceListController::class);
            Route::get('wallet-test', [SupplierController::class,'walletTest']);
            route::post('deposite',[SupplierController::class,'deposite'])->name('deposite');
            route::post('debit',[SupplierController::class,'debit'])->name('debit');
            route::post('withdraw',[SupplierController::class,'withdraw'])->name('withdraw');
            route::post('payPremium',[SupplierController::class,'payPremium'])->name('payPremium');
    });


