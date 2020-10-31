<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')
    ->name('Home');

Route::get('/detail', 'DetailController@index')
    ->name('Detail');

Route::get('/checkout', 'CheckoutController@index')
    ->name('Checkout');

 Route::get('/checkout/succes', 'CheckoutController@succes')
    ->name('Checkout Succes');

Route::prefix('admin')
        ->namespace('admin')
        ->middleware(['auth', 'admin'])
        ->group(function(){
            Route::get('/', 'DashboardController@index')
            ->name('dashboard');

            Route::resource('travel-package', 'TravelPackageController');
        });
Auth::routes(['verify' => true]);