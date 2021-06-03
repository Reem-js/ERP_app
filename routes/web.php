<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\roles\RoleController;
use App\Http\Controllers\backend\users\UserController;
use App\Http\Controllers\backend\brands\BrandController;
use App\Http\Controllers\backend\clientss\ClientController;
use App\Http\Controllers\backend\website\WebsiteController;
use App\Http\Controllers\backend\expenses\ExpenseController;
use App\Http\Controllers\backend\products\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\backend\suppliers\SupplierController;
use App\Http\Controllers\backend\categories\CategoryController;
use App\Http\Controllers\backend\permissions\PermissionController;
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
        Route::group(['middleware' => 'auth'],function () {
            /* New Routes */
            // users
            Route::resource('users',UserController::class);
            // expenses
            Route::resource('expenses',ExpenseController::class);
            // expenses types
            Route::resource('expensesTypes',ExpenseTypeController::class);
            // priceList
            Route::resource('priceLists',priceListController::class);
            // setting
            Route::get('settings',[WebsiteController::class,'getWebsite'])->name('get.website');
            // brands
            Route::resource('brands', BrandController::class);
            // categories
            Route::resource('categories', CategoryController::class);
            // products || stock
            Route::resource('products', ProductController::class);
            Route::get('products/history/{id}', [ProductController::class, 'history'])->name('products.history');
            // user wallet
            Route::get('user-wallet',[UserWalletController::class,'getWallet'])->name('get.user.wallet');
            Route::resource('user-wallet-transactions',UserWalletTransactionController::class);
            // supplier wallet
            Route::resource('suppliers',SupplierController::class);
            Route::get('supplier-wallet',[SupplierWalletController::class,'getSupplierWallet'])->name('get.supplier.wallet');
            Route::get('supplier-wallet-trans/{suppplier}',[SupplierWalletController::class,'getSupplierWalletTrans'])->name('get.supplier.wallet.trans');
            Route::resource('supplier-wallet-transactions',SupplierWalletTransactionController::class);
            // client wallet
            Route::resource('clients',ClientController::class);
            Route::get('client-wallet',[ClientWalletController::class,'getClientWallet'])->name('get.client.wallet');
            Route::get('client-wallet-trans/{client}',[ClientWalletController::class,'getClientWalletTrans'])->name('get.client.wallet.trans');
            Route::resource('client-wallet-transactions',ClientWalletTransactionController::class);
            // roles
            Route::resource('roles', RoleController::class);
            // permissions
            Route::resource('permissions',PermissionController::class);
            Route::delete('destroy-all',[PermissionController::class,'destroyAll'])->name('permissions.destroy.all');
        });

    }
);



