<?php

use Illuminate\Support\Facades\Route;


Route::get('/testttttt',function(){
    return 'marketermarketer';
});
//======================================>marketer/dashboard
Route::get('/',Http\Livewire\Marketer\Dashboard\Index::class)
    ->name('marketer.dashboard.index');
//======================================>Marketer/profile
Route::get('/profile',Http\Livewire\Marketer\Dashboard\Profile::class)
    ->name('marketer.dashboard.profile');

//======================================>Marketer/find/product
Route::get('/content/find/product',Http\Livewire\Marketer\Product\Find::class)
    ->name('marketer.product.find');
//======================================>Marketer/product
Route::get('/product',Http\Livewire\Marketer\Product\Product::class)
    ->name('marketer.product.product');

//======================================>orders
Route::get('/orders',Http\Livewire\Marketer\Orders\Order::class)
    ->name('marketer.order.order');

//======================================>Marketer/create/product
Route::get('/content/create/product',Http\Livewire\Marketer\Product\Create::class)
    ->name('marketer.product.create');

