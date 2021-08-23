
<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Clients\Http\Controllers\clientss\ClientController;
use Clients\Http\Controllers\ClientWallet\ClientWalletController;
use Clients\Http\Controllers\ClientWalletTransactions\ClientWalletTransactionController;
use Clients\Http\Controllers\testController;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/'.config('module.Clients'),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','web','auth']

    ],
    function () {

        Route::resource('clients',   ClientController::class)->parameters(['clients' => 'client:slug']);
        Route::get('client-wallet', [ClientWalletController::class, 'getClientWallet'])->name('get.client.wallet');
        Route::get('client-wallet-trans/{client}', [ClientWalletController::class, 'getClientWalletTrans'])->name('get.client.wallet.trans');
        Route::resource('client-wallet-transactions', ClientWalletTransactionController::class);
        Route::get('datatables',[ClientController::class,'clientData'])->name('client.data');




    });


















?>
