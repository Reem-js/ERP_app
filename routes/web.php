<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\users\UserController;
use App\Http\Controllers\backend\clientss\ClientController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\backend\suppliers\SupplierController;
use App\Http\Controllers\backend\UserWallet\UserWalletController;
use App\Http\Controllers\backend\ClientWallet\ClientWalletController;
use App\Http\Controllers\backend\SupplierWallet\SupplierWalletController;
use App\Http\Controllers\backend\UserWalletTransactions\UserWalletTransactionController;
use App\Http\Controllers\backend\ClientWalletTransactions\ClientWalletTransactionController;
use App\Http\Controllers\backend\SupplierWalletTransactions\SupplierWalletTransactionController;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        Route::get('/', function () {
            return view('welcome');
        });
        Route::group(['middleware' => 'auth'], function () {
            Route::get('table-list', function () { return view('pages.table_list'); })->name('table');
            Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
            Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
            Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
            Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
        });

        Auth::routes(); // ['register' => false]
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::group([],function () {
            /* New Routes */
            Route::resource('users',UserController::class);
            Route::get('user-wallet',[UserWalletController::class,'getWallet'])->name('get.user.wallet');
            Route::resource('user-wallet-transactions',UserWalletTransactionController::class);

            Route::resource('suppliers',SupplierController::class);
            Route::get('supplier-wallet',[SupplierWalletController::class,'getSupplierWallet'])->name('get.supplier.wallet');
            Route::resource('supplier-wallet-transactions',SupplierWalletTransactionController::class);

            Route::resource('clients',ClientController::class);
            Route::get('client-wallet',[ClientWalletController::class,'getClientWallet'])->name('get.client.wallet');
            Route::resource('client-wallet-transactions',ClientWalletTransactionController::class);



        });
    }
);

