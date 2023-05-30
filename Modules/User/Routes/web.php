<?php

use Modules\User\Http\Livewire\Home\Register;
use Modules\User\Http\Livewire\Home\Confirm;
use Modules\User\Http\Livewire\Home\ConfirmPassword;
use Modules\User\Http\Livewire\Home\ConfirmPasswordVerify;
use Modules\User\Http\Livewire\Home\Registerconfirm;
use Modules\User\Http\Livewire\Home\ForgetPassword;
use Modules\User\Http\Livewire\Home\ForgetPasswordPhone;
use Modules\User\Http\Livewire\Home\PasswordReset;
use Modules\User\Http\Livewire\Home\Welcome;
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

Route::get('/login', function () {
    return redirect(route('user.login-register'));
})->name('login');
Route::get('/register', function () {
    return redirect(route('user.login-register'));
})->name('register');

//User page
Route::middleware(['web','guest'])->prefix('users')->group(function () {
    Route::get('/login-register', Register::class)->name('user.login-register');
    Route::get('/login-register/confirm/{code}', Confirm::class)->name('users.confirm');
    Route::get('/login/confirm/password/{user}', ConfirmPassword::class)->name('users.confirm.password');
    Route::get('/login/confirm/password/verify/{user}', ConfirmPasswordVerify::class)->name('users.confirm.password.verify');
    Route::get('/register/confirm/{user}', Registerconfirm::class)->name('users.register.confirm');
    Route::get('/password/forgot/{user}', ForgetPassword::class)->name('users.password.confirm');
    Route::get('/password/forgot/phone/{user}', ForgetPasswordPhone::class)->name('users.password.forgetPhone');
    Route::get('/password/reset/{user}', PasswordReset::class)->name('users.password.reset');
    Route::get('/welcome', Welcome::class)->name('users.welcome');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
});
