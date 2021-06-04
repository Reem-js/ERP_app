<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\users\UserController;
use App\Http\Controllers\backend\index\IndexController;
use App\Http\Controllers\backend\brands\BrandController;
use App\Http\Controllers\backend\clientss\ClientController;
use App\Http\Controllers\backend\website\WebsiteController;
use App\Http\Controllers\backend\expenses\ExpenseController;
use App\Http\Controllers\backend\products\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\backend\suppliers\SupplierController;
use App\Http\Controllers\backend\categories\CategoryController;
use App\Http\Controllers\backend\priceLists\priceListController;
use App\Http\Controllers\backend\UserWallet\UserWalletController;
use App\Http\Controllers\backend\ClientWallet\ClientWalletController;
use App\Http\Controllers\backend\expensesTypes\ExpenseTypeController;
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
    // Route::livewire('livewire/purchases','Purchases');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        Auth::routes(); // ['register' => false]
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/',[IndexController::class ,'index']);
        Route::group(['middleware' => 'auth'],function () {
            /* New Routes */
            Route::resource('expenses',ExpenseController::class);
            Route::resource('expensesTypes',ExpenseTypeController::class);

            Route::resource('priceLists',priceListController::class);
            Route::get('website',[WebsiteController::class,'getWebsite'])->name('get.website');

            Route::resource('brands', BrandController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('products', ProductController::class);
            Route::get('products/history/{id}', [ProductController::class, 'history'])->name('products.history');

            Route::resource('users',UserController::class);
            //msh l2yah
            // Route::get('profile',[UserController::class,'profileShow'])->name('profile.show');
            Route::get('profile',[UserController::class,'profileEdit'])->name('profile.edit');
            Route::put('profile',[UserController::class,'profileUpdate'])->name('profile.update');
            Route::put('profile-password',[UserController::class,'profilePassword'])->name('profile.password');



            Route::get('user-wallet',[UserWalletController::class,'getWallet'])->name('get.user.wallet');
            Route::resource('user-wallet-transactions',UserWalletTransactionController::class);
            Route::resource('suppliers',SupplierController::class);
            Route::get('supplier-wallet',[SupplierWalletController::class,'getSupplierWallet'])->name('get.supplier.wallet');
            Route::get('supplier-wallet-trans/{suppplier}',[SupplierWalletController::class,'getSupplierWalletTrans'])->name('get.supplier.wallet.trans');
            Route::resource('supplier-wallet-transactions',SupplierWalletTransactionController::class);
            Route::resource('clients',ClientController::class);
            Route::get('client-wallet',[ClientWalletController::class,'getClientWallet'])->name('get.client.wallet');
            Route::get('client-wallet-trans/{client}',[ClientWalletController::class,'getClientWalletTrans'])->name('get.client.wallet.trans');
            Route::resource('client-wallet-transactions',ClientWalletTransactionController::class);
        });

    }
);



