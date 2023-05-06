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
Route::get('/seller/registration', Http\livewire\Seller\Auth\Register::class)
    ->name('seller.register');
Route::get('/seller/registration/email/{seller}', Http\livewire\Seller\Auth\Register\Email::class)
    ->name('seller.register.email');

Route::get('/seller/registration/business-details/{seller}', Http\livewire\Seller\Auth\Register\Detail::class)
    ->name('seller.register.detail');

//seller Login
Route::get('/seller/account/login', Http\livewire\Seller\Auth\login::class)
    ->name('seller.login');
//seller Login
Route::get('/seller/account/forgotpassword/', Http\livewire\Seller\Auth\Password::class)
    ->name('seller.password');
