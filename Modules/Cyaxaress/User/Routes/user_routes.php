<?php

/*Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'web'
], function ($router) {
    Auth::routes(['verify' => true]);
});*/

Route::get('/login', function () {
    return redirect(route('user.login-register'));
})->name('login');
Route::get('/register', function () {
    return redirect(route('user.login-register'));
})->name('register');
