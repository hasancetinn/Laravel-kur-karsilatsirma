<?php

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



Route::get('/', function () {
    return redirect('/compare-exchange');
});
Route::get('/compare-exchange', 'ExchangeRate\CompareExchangeRates@index')->name('compare-exchange');
Route::get('/adapter1', 'ExchangeRate\Adapters\Adapter1@index')->name('adapter1');
Route::get('/adapter2', 'ExchangeRate\Adapters\Adapter2@index')->name('adapter2');
//Route::post('/compare-exchange/fetch-links', 'ExchangeRate\CompareExchangeRates@compareJSON');

Route::get('test', '\App\Http\Controllers\Test@test');
