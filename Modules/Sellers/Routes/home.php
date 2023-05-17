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
//seller register
Route::get('/seller/registration', Modules\Sellers\Http\livewire\Seller\Auth\Register::class)
    ->name('seller.register');
Route::get('/seller/registration/email/{seller}', Modules\Sellers\Http\livewire\Seller\Auth\Register\Email::class)
    ->name('seller.register.email');

Route::get('/seller/registration/business-details/{seller}', Modules\Sellers\Http\livewire\Seller\Auth\Register\Detail::class)
    ->name('seller.register.detail');

//seller Login
Route::get('/seller/account/login', Modules\Sellers\Http\livewire\Seller\Auth\login::class)
    ->name('seller.login');
//seller Login
Route::get('/seller/account/forgotpassword/', Modules\Sellers\Http\livewire\Seller\Auth\Password::class)
    ->name('seller.password');
