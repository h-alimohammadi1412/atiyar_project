<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

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

// Route::get('/test', function (Request $request, Response $response) {
//     // $minutes = 60;
//     // $response = new Response('Set Cookie55');
//     // $response->withCookie(cookie('nameffffff', 'fffffffffff', $minutes));
//     // $response->withoutCookie('nameffffff');
//     // return $response;
//     // $value = $value = 1;
//     $minutes = 15;
//     $value = 1;
//     Cookie::queue('online_payment_idvvvv', '55', $minutes);
//     // $d  = $request->cookie('online_payment_id');

//     return redirect('/test1');

//     // $value = $request->cookie('namedd');
//     // echo $value;
// });
Route::get('/test1', function (Request $request) {
    return $request->cookie('online_payment_idvvvv');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
Route::get('/sitem', function () {
    SitemapGenerator::create('http://127.0.0.1:8000/')->writeToFile(public_path('sitemap.xml'));
    return back();
});
Route::get('/', \App\Http\Livewire\Home\Home\Index::class)->name('home.index');
//category and Subcategory
Route::middleware('web')->prefix('main')->group(function () {
    Route::get('/{category}', \App\Http\Livewire\Home\Category\Index::class);
    //Route::get('/electronic-devices',\App\Http\Livewire\Home\Category\Electronic\Index::class)->name('category.electronic.index');
    //Route::get('/vehicles',\App\Http\Livewire\Home\Category\Vehicle\Index::class)->name('category.electronic.index');
    //Route::get('/apparel',\App\Http\Livewire\Home\Category\Apparel\Index::class)->name('category.apparel.index');
    //Route::get('/mother-and-child/',\App\Http\Livewire\Home\Category\Child\Index::class)->name('category.child.index');
});
Route::middleware('web')->prefix('search')->group(function () {
    Route::get('/{category}', \App\Http\Livewire\Home\SubCategory\Index::class);
});
//single Product page
Route::middleware('web')->prefix('product')->group(function () {
    Route::get('/at-{id}/{product}', \App\Http\Livewire\Home\Product\Index::class);
});
Route::get('/product/comment/at-{id}/{product}', \App\Http\Livewire\Home\Comment\Review::class)->middleware('auth');


Route::name('profile.')->middleware(['web', 'auth'])->prefix('profile')->group(function () {
    Route::get('/', \App\Http\Livewire\Home\Profile\Index::class)->name('index');
    Route::get('/personal-info', \App\Http\Livewire\Home\Profile\PersonalInfo::class)->name('personal-info');
    Route::get('/favorites', \App\Http\Livewire\Home\Profile\Favorite::class)->name('favorite');
    Route::get('/observed', \App\Http\Livewire\Home\Profile\Observed::class)->name('observed');
    Route::get('/wishlist/{favlist}/details/', \App\Http\Livewire\Home\Profile\FavlistShow::class)->name('favlist.show');
});
Route::middleware(['web', 'auth'])->prefix('profile')->group(function () {
    Route::get('/addresses', \App\Http\Livewire\Home\Profile\Address::class)->name('address.index');
    // Route::get('/addresses/edit/{address}', \App\Http\Livewire\Home\Profile\AddressEdit::class)->name('address.edit');
    Route::get('/user-history', \App\Http\Livewire\Home\Profile\UserHistory::class)->name('user-history.index');
    Route::get('/seller', \App\Http\Livewire\Home\Profile\Seller::class)->name('profile.seller.index');
    Route::get('/marketer', \App\Http\Livewire\Home\Profile\Marketer::class)->name('profile.marketer.index');
    Route::get('/notification', \App\Http\Livewire\Home\Profile\Notification::class)->name('notification.index');
    Route::get('/giftcards', \App\Http\Livewire\Home\Profile\Gift::class)->name('gift.index');
    Route::get('/orders', \App\Http\Livewire\Home\Profile\Order::class)->name('order.profile.index');
    Route::get('/orders/order-{order_number}', \App\Http\Livewire\Home\Profile\Order\Detail::class)->name('order.profile.detail');
    Route::get('/orders-return/{order_number}/items-info', \App\Http\Livewire\Home\Profile\Order\Detail\ItemInfo::class)
        ->name('returned.itemInfo');
    Route::get('/orders-return/{order_number}/select-items', \App\Http\Livewire\Home\Profile\Order\Detail\Returned::class)
        ->name('order.profile.returned2');
    Route::get('/orders/{id}/invoice', \App\Http\Livewire\Home\Profile\Order\Invoice::class)
        ->name('order.profile.invoice');
});

//compare
Route::get('/compare/dkp-{id}', \App\Http\Livewire\Home\Compare\Step1::class)->name('compare.step1');
Route::get('/compare/dkp-{id2}/dkp-{id}', \App\Http\Livewire\Home\Compare\Step2::class)->name('compare.step2');
//Route::get('/compare/dkp-{id}/dkp-{id}/dkp-{id}', \App\Http\Livewire\Home\Compare\Step3::class)->name('compare.step3');
//Route::get('/compare/dkp-{id}/dkp-{id}/dkp-{id}/dkp-{id}', \App\Http\Livewire\Home\Compare\Step4::class)->name('compare.step4');






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//newsletter
Route::post('/newsletter', [PostController::class, 'newsletter'])->name('post.newsletter');

//cart
Route::get('/cart', \App\Http\Livewire\Home\Cart\Index::class)->name('cart.index');
Route::get('/next-cart', \App\Http\Livewire\Home\Cart\NextCart::class)->name('cart.next');
//shopping
Route::get('/shipping', \App\Http\Livewire\Home\Order\Shipping::class)
    ->name('order.shipping')->middleware('auth');
Route::post('/shipping', [PostController::class, 'shipping'])->name('address.shipping.create');
Route::delete('/shipping/delete/{id}', [PostController::class, 'shipping_delete'])->name('address.shipping.delete');
//payment
Route::get('/payment', \App\Http\Livewire\Home\Order\Payment::class)
    ->name('order.payment')->middleware('auth');

//payment
Route::get('/payment/bank/order-{order_number}', \App\Http\Livewire\Home\Order\Payment\BankPayment::class)
    ->name('bank.payment')->middleware('auth');

//payment Bank
Route::get('/payment/bank/pay/order-{order_number}', [\App\Http\Controllers\PayController::class, 'pay'])
    ->name('bank.pay')->middleware('auth');
//payment Bank
Route::get('/payment/bank/callback', [\App\Http\Controllers\PayController::class, 'callback'])
    ->name('bank.callback');



//seller register
Route::get('/seller/registration', App\Http\Livewire\Seller\Auth\Register::class)
    ->name('seller.register');
// Route::get('/seller/registration/email/{seller}', App\Http\Livewire\Seller\Auth\Register\Email::class)
//     ->name('seller.register.email');

// Route::get('/seller/registration/business-details/{seller}', App\Http\Livewire\Seller\Auth\Register\Detail::class)
//     ->name('seller.register.detail');

// //seller Login
// Route::get('/seller/account/login', App\Http\Livewire\Seller\Auth\Login::class)
//     ->name('seller.login');
// //seller Login
// Route::get('/seller/account/forgotpassword/', App\Http\Livewire\Seller\Auth\Password::class)
//     ->name('seller.password');


//marketer register
Route::get('/marketer/registration', App\Http\Livewire\Marketer\Auth\Register::class)
    ->name('marketer.register');
// Route::get('/marketer/registration/email/{marketer}', App\Http\Livewire\Marketer\Auth\Register\Email::class)
//     ->name('marketer.register.email');

// Route::get('/marketer/registration/business-details/{marketer}', App\Http\Livewire\Marketer\Auth\Register\Detail::class)
//     ->name('marketer.register.detail');

// //marketer Login
// Route::get('/marketer/account/login', App\Http\Livewire\Marketer\Auth\Login::class)
//     ->name('marketer.login');
// //marketer Login
// Route::get('/marketer/account/forgotpassword/', App\Http\Livewire\Marketer\Auth\Password::class)
//     ->name('marketer.password');
