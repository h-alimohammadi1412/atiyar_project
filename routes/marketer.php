<?php

use Illuminate\Support\Facades\Route;
Route::get('/testttttt',function(){
    return 'marketermarketer';
});
//======================================>marketer/dashboard
Route::get('/',App\Http\Livewire\Marketer\Dashboard\Index::class)
    ->name('marketer.dashboard.index');
//======================================>Marketer/profile
Route::get('/profile',App\Http\Livewire\Marketer\Dashboard\Profile::class)
    ->name('marketer.dashboard.profile');

//======================================>Marketer/find/product
Route::get('/content/find/product',App\Http\Livewire\Marketer\Product\Find::class)
    ->name('marketer.product.find');
//======================================>Marketer/product
Route::get('/product',App\Http\Livewire\Marketer\Product\Product::class)
    ->name('marketer.product.product');

//======================================>orders
Route::get('/orders',App\Http\Livewire\Marketer\Orders\Order::class)
    ->name('marketer.order.order');

//======================================>Marketer/create/product
Route::get('/content/create/product',App\Http\Livewire\Marketer\Product\Create::class)
    ->name('marketer.product.create');

