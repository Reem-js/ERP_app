<?php


use App\Http\Controllers\backend\expenses\ExpenseController;
use App\Http\Controllers\backend\reports\ReportController;
use App\Http\Controllers\backend\expensesTypes\ExpenseTypeController;
use App\Http\Controllers\backend\priceLists\priceListController;
use App\Http\Controllers\backend\website\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\users\UserController;
use App\Http\Controllers\backend\brands\BrandController;
use App\Http\Controllers\backend\products\ProductController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\backend\categories\CategoryController;
use App\Http\Controllers\backend\clientss\ClientController;
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
            Route::resource('users',UserController::class);
            Route::resource('expenses',ExpenseController::class);
            Route::resource('expensesTypes',ExpenseTypeController::class);
            Route::resource('priceLists',priceListController::class);
            Route::get('website',[WebsiteController::class,'getWebsite'])->name('get.website');
            Route::resource('brands', BrandController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('products', ProductController::class);
            Route::get('products/history/{id}', [ProductController::class, 'history'])->name('products.history');
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
            Route::get('most-sale-product',[ReportController::class,'getMostSaleProduct'])->name('most-sold-products');
            Route::get('total-capital',[ReportController::class,'getTotalCapital'])->name('total-capital');
            Route::get('month-profit',[ReportController::class,'getMonthProfit'])->name('monthly-profits');
            Route::get('best-customers',[ReportController::class,'getBestCustomers'])->name('best-customers');
            Route::get('best-suppliers',[ReportController::class,'getBestSuppliers'])->name('best-suppliers');
            Route::get('frequent-customers',[ReportController::class,'getFrequentCustomers'])->name('frequent-customers');
            Route::get('frequent-suppliers',[ReportController::class,'getFrequentSuppliers'])->name('frequent-suppliers');
            Route::get('installments-and-sales',[ReportController::class,'getInstallmentAndSales'])->name('Installments-and-sales');
            Route::get('installments-and-purchases',[ReportController::class,'getInstallmentsAndPurchases'])->name('installments-and-purchases');
            Route::get('receivables-and-payments',[ReportController::class,'getReceivablesAndPayments'])->name('receivables-and-payments');

        });

    }
);



