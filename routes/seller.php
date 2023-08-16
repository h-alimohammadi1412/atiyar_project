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

//======================================>seller/dashboard
Route::get('/',App\Http\Livewire\Seller\Dashboard\Index::class)
    ->name('seller.dashboard.index');
//======================================>seller/profile
Route::get('/desk',App\Http\Livewire\Seller\Dashboard\Desk::class)
    ->name('seller.dashboard.desk');

//======================================>seller/find/product
Route::get('/content/find/product',App\Http\Livewire\Seller\Product\Find::class)
    ->name('seller.product.find');
//======================================>seller/product
Route::get('/product',App\Http\Livewire\Seller\Product\Product::class)
    ->name('seller.product.product');

//======================================>orders
Route::get('/orders',App\Http\Livewire\Seller\Orders\Order::class)
    ->name('seller.order.order');

//======================================>seller/create/product
Route::get('/content/create/product',App\Http\Livewire\Seller\Product\Create::class)
    ->name('seller.product.create');


    Route::get('/profile', App\Http\Livewire\Seller\Dashboard\Profile::class)
    ->name('seller.dashboard.profile')->middleware('authenticate.seller');

    Route::get('/training', App\Http\Livewire\Seller\Dashboard\Training::class)
    ->name('seller.dashboard.training')->middleware('authenticate.seller');

    Route::get('/rules', App\Http\Livewire\Seller\Dashboard\Rules::class)
    ->name('seller.dashboard.rules')->middleware('authenticate.seller');

    Route::get('/upload-document', App\Http\Livewire\Seller\Dashboard\UploadDocument::class)
    ->name('seller.dashboard.upload-document')->middleware('authenticate.seller');

    Route::get('/contract', App\Http\Livewire\Seller\Dashboard\Contract::class)
    ->name('seller.dashboard.contract')->middleware('authenticate.seller');

    Route::get('/store-information', App\Http\Livewire\Seller\Dashboard\StoreInformation::class)
    ->name('seller.dashboard.store-information')->middleware('authenticate.seller');

    Route::get('/plans', App\Http\Livewire\Seller\Dashboard\Plans::class)
    ->name('seller.dashboard.plans')->middleware('authenticate.seller');