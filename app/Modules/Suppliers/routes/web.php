<?php

use Illuminate\Support\Facades\Route;
use Suppliers\Http\Controllers\SupplierController;
use Suppliers\Http\Controllers\PriceListController;
use Suppliers\Http\Controllers\testWalletController;
use Suppliers\Http\Controllers\SupplierWalletController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Suppliers\Http\Controllers\SupplierWalletTransactionController;

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
            Route::resource('suppliers.pricelists', priceListController::class)->parameters(['suppliers' => 'supplier:slug','pricelists' => 'pricelist:slug']);
            Route::get('pricelist-datatables/{supplier_id}',[priceListController::class,'priceListData'])->name('priceList.data');

            /* test wallet */
            Route::get('wallet-test', [testWalletController::class,'walletTest']);
            route::post('deposite',[testWalletController::class,'deposite'])->name('deposite');
            route::post('debit',[testWalletController::class,'debit'])->name('debit');
            route::post('withdraw',[testWalletController::class,'withdraw'])->name('withdraw');
            route::post('paymentOut',[testWalletController::class,'paymentOut'])->name('paymentOut');
            route::post('paymentIn',[testWalletController::class,'paymentIn'])->name('paymentIn');

    });


