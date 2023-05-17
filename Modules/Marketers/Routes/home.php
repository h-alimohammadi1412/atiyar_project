<?php
use Illuminate\Support\Facades\Route;

 //marketer register
 Route::get('/marketer/registration', Http\Livewire\Marketer\Auth\Register::class)
     ->name('marketer.register');
 Route::get('/marketer/registration/email/{marketer}', Http\Livewire\Marketer\Auth\Register\Email::class)
     ->name('marketer.register.email');

 Route::get('/marketer/registration/business-details/{marketer}', Http\Livewire\Marketer\Auth\Register\Detail::class)
     ->name('marketer.register.detail');

 //marketer Login
 Route::get('/marketer/account/login', Http\Livewire\Marketer\Auth\Login::class)
     ->name('marketer.login');
 //marketer Login
 Route::get('/marketer/account/forgotpassword/', Http\Livewire\Marketer\Auth\Password::class)
     ->name('marketer.password');
