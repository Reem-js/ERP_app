<?php

use App\Http\Controllers\backend\users\UserController;
use App\Http\Controllers\backend\expenses\ExpenseController;
use App\Http\Controllers\backend\expensesTypes\ExpenseTypeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    function () {
Route::get('createexp', function () {
    return view('createexp');
});

Route::get('indexexp', function () {
    return view('indexexp');
});
Route::get('editeexp', function () {
    return view('editeexp');
});
Route::get('indexexpty', function () {
    return view('indexexpty');
});
    });
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

            /* expenses route */
            Route::resource('expenses',ExpenseController::class);
            /**************** 
             * name: * all = expenses.index * ADD = expenses.create* edite = expenses.edit*/

              /* expenses types route */
            Route::resource('expensesTypes',ExpenseTypeController::class);
            /**************** 
             * * name: * all = expensesTypes.index * ADD = expensesTypes.create* edite = expensesTypes.edit*/

        });
    }
);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
