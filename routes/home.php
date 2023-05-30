<?php

use App\Http\Controllers\PostController;
use App\Mail\OrderSubmit;
use App\Models\Notification;
use App\Models\Order;
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
//Route::get('ma',function (){
//    $order = Order::where('user_id',auth()->user()->id)->get()->last();
//    $type = 'سفارش شما ثبت شد';
//    Notification::create([
//        'user_id' =>$order->user_id,
//        'product_id' =>$order->product_id,
//        'type' =>$type,
//        'sms' =>1,
//        'email' =>1,
//        'system' =>1,
//        'text' =>$order->product->title,
//    ]);
//
//});

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


Route::middleware('web')->prefix('profile')->middleware('auth')->group(function () {
    Route::get('/', \App\Http\Livewire\Home\Profile\Index::class)->name('profile.index');
    Route::get('/personal-info', \App\Http\Livewire\Home\Profile\PersonalInfo::class)->name('profile.personal-info');
    Route::get('/favorites', \App\Http\Livewire\Home\Profile\Favorite::class)->name('profile.favorite');
    Route::get('/wishlist/{favlist}/details/', \App\Http\Livewire\Home\Profile\FavlistShow::class)->name('profile.fav;ist.show');
    Route::get('/addresses', \App\Http\Livewire\Home\Profile\Address::class)->name('address.index');
    Route::get('/addresses/edit/{address}', \App\Http\Livewire\Home\Profile\AddressEdit::class)->name('address.edit');
    Route::get('/user-history', \App\Http\Livewire\Home\Profile\UserHistory::class)->name('user-history.index');
    Route::get('/notification', \App\Http\Livewire\Home\Profile\Notification::class)->name('user-history2.index');
    Route::get('/giftcards', \App\Http\Livewire\Home\Profile\Gift::class)->name('gift.index');
    Route::get('/orders', \App\Http\Livewire\Home\Profile\Order::class)->name('order.profile.index');
    Route::get('/my-orders/paid-in-progress', \App\Http\Livewire\Home\Profile\Order\Paid::class)->name('order.profile.paid');
    Route::get('/my-orders/delivered', \App\Http\Livewire\Home\Profile\Order\Delivered::class)->name('order.profile.delivered');
    Route::get('/my-orders/returned', \App\Http\Livewire\Home\Profile\Order\Returned::class)->name('order.profile.returned');
    Route::get('/my-orders/canceled', \App\Http\Livewire\Home\Profile\Order\Cancel::class)->name('order.profile.canceled');
    Route::get('/my-orders/{order_number}', \App\Http\Livewire\Home\Profile\Order\Detail::class)->name('order.profile.detail');
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
Route::get('/payment/bank/pay', [\App\Http\Controllers\PayController::class, 'pay'])
    ->name('bank.pay')->middleware('auth');
//payment Bank
Route::get('/payment/bank/callback', [\App\Http\Controllers\PayController::class, 'callback'])
    ->name('bank.callback');



//seller register
// Route::get('/seller/registration', App\Http\Livewire\Seller\Auth\Register::class)
//     ->name('seller.register');
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


// //marketer register
// Route::get('/marketer/registration', App\Http\Livewire\Marketer\Auth\Register::class)
//     ->name('marketer.register');
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
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});
