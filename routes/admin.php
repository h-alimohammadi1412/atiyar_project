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


//======================================>admin/dashboard
Route::get('/', Dashboard\Index::class)->name('admin.index');

//=======================================>LogSystem
Route::get('/log', Log\Index::class)->name('log.index');

//=======================================> //category//
Route::name('category.')->group(function () {
    Route::get('/category', Category\Index::class)->name('index')->middleware('can:show-category');
    Route::get('/category/update/{category}', Category\Update::class)->name('update');
    Route::get('/category/trashed', Category\Trashed::class)->name('trashed');

    //Category Page
    Route::get('/category/slider', Categorypage\Slider::class)->name('slider');
    Route::get('/category/amazing', Categorypage\Amazing::class)->name('amazing');
    Route::get('/category/title', Categorypage\Title::class)->name('title');
    Route::get('/category/product', Categorypage\Product::class)->name('product');
    Route::get('/category/banner', Categorypage\Banner::class)->name('banner');
    Route::get('/category/brand', Categorypage\Brand::class)->name('brand');
    Route::get('/category-level', Categorypage\Categorylevel::class)->name('level');
});

//=======================================> //product//
route::name('product.')->group(function () {
    Route::get('/product', Product\Index::class)->name('index')->middleware('can:show-product');
    Route::get('/product/create', Product\Create::class)->name('create');
    Route::get('/product/update/{product}', Product\Update::class)->name('update');
    Route::get('/product/trashed', Product\Trashed::class)->name('trashed');
});

//=======================================> //gallery Images//
Route::get('/gallery/product/{product}', Product\Gallery\Product::class)->name('product.gallery_image');
Route::post('/product/gallery_upload/{id}', \App\Http\Controllers\AdminControllerLivewire::class . '@galleryUpload');
Route::post('/product/gallery/change_image_position/{id}', \App\Http\Controllers\AdminControllerLivewire::class . '@changeImagePosition');

//=======================================> //brands//
route::name('brand.')->group(function () {
    Route::get('/brand', Brand\Index::class)->name('index');
    Route::get('/brand/update/{brand}', Brand\Update::class)->name('update');
    Route::get('/brand/trashed', Brand\Trashed::class)->name('trashed');
});

//=======================================> //colors//
route::name('color.')->group(function () {
    Route::get('/color', Product\Color\Index::class)->name('index');
    Route::get('/color/update/{color}', Product\Color\Update::class)->name('update');
    Route::get('/color/trashed', Product\Color\Trashed::class)->name('trashed');
});

//=======================================> //warranties//
route::name('warranty.')->group(function () {
    Route::get('/warranty', Product\Warranty\Index::class)->name('index');
    Route::get('/warranty/update/{warranty}', Product\Warranty\Update::class)->name('update');
    Route::get('/warranty/trashed', Product\Warranty\Trashed::class)->name('trashed');
});

//=======================================> //productVendor//
Route::get('/productVendor/update/{productSeller}', Product\ProductVendor\Update::class)->name('productSeller.update');
Route::get('/productVendor/trashed', Product\ProductVendor\Trashed::class)->name('productVendor.trashed');
Route::get('/productVendor/product/{product}', Product\ProductVendor\Single::class)->whereNumber('product')->name('product.productVendor');


//=======================================> //Attribute//
route::name('attribute.')->group(function () {
    Route::get('/attribute/trashed', Product\Attribute\Trashed::class)->name('trashed');
    Route::get('/attribute/{category}', Product\Attribute\Index::class)->name('index');
    Route::get('/attribute/update/{attribute}', Product\Attribute\Update::class)->name('update');
});


//=======================================> //attributeValue//
Route::get('/attributeValue/update/{attribute}', Product\AttributeValue\Update::class)->name('attributeValue.update');
Route::get('/attributeValue/trashed', Product\AttributeValue\Trashed::class)->name('attributeValue.trashed');
Route::get('/attribute/product/{product}', Product\Attribute\Product::class)->name('product.attribute');
//=======================================> //page//
route::name('page.')->group(function () {
    Route::get('/page', Page\Index::class)->name('index');
    Route::get('/page/update/{page}', Page\Update::class)->name('update');
    Route::get('/page/trashed', Page\Trashed::class)->name('trashed');
});

//=======================================> //newsletter//
Route::get('/newsletter', Newsletter\Index::class)->name('newsletter.index');
Route::get('/social', Social\Index::class)->name('social.index');


//=======================================> //footer//
Route::get('/footer', Footer\Innerbox\Index::class)->name('footer.index');
Route::get('/footer/link1', Footer\Link\One::class);
Route::get('/footer/link2', Footer\Link\Two::class);
Route::get('/footer/link3', Footer\Link\Three::class);
Route::get('/footer/linktitle', Footer\Link\Title::class)->name('footer_page_title.index');
Route::get('/footer/linktitle/update/{footer_page}', Footer\Link\TitleUpdate::class)->name('footer_page_title.update');
Route::get('/footer/title', Footer\Title\Index::class)->name('footer_title.index');
Route::get('/footer/title/update/{footer_title}', Footer\Title\Update::class)->name('footer_title.update');
Route::get('/footer/partner', Footer\Link\Partner::class);


//=======================================> //Header//
Route::get('/header', Site\Header\Index::class)->name('header.index');
Route::get('/header/update/{header}', Site\Header\Update::class)->name('header.update');
//=======================================> //Menu Category//
Route::get('/menu', Menu\Index::class)->name('menu.index');
Route::get('/menu/update/{menu}', Menu\Update::class)->name('menu.update');

Route::get('/index/title', Index\Title\Index::class)->name('index.title.index');
Route::get('/index/title/update/{index}', Index\Title\Update::class)->name('index.title.update');
Route::get('/index/category', Index\Category\Index::class)->name('index.category.index');

Route::get('/index/newselected', Product\Selected\NewProduct::class)->name('index.newselected.index');
Route::get('/index/productselected', Product\Selected\ProductSelected::class)->name('index.productselected.index');

//=======================================emails
Route::get('/email', Email\IndexEmail::class)->name('email.index');

//=================gift
Route::get('/gift', Gift\IndexGift::class)->name('admin.gift.index');

//=================discount Code
Route::get('/discount', Discount\IndexDiscount::class)->name('discount.index');


//=======================================> //ads
Route::get('/ads', Ads\Index::class)->name('ads.index');
Route::get('/ads/update/{ads}', Ads\Update::class)->name('ads.update');

//=======================================> //banner
Route::get('/banner', Banner\Index::class)->name('banner.index');
Route::get('/banner/update/{banner}', Banner\Update::class)->name('banner.update');

//=======================================> //profile Banner
Route::get('/bannerprofile', Banner\ProfileBanner::class)->name('profileBanner.index');
Route::get('/bannerprofile/update/{banner}', Banner\ProfileBannerUpdate::class)->name('ProfileBanner.update');

//=======================================> //slider
Route::get('/slider', Slider\Index::class)->name('slider.index');
Route::get('/slider/update/{slider}', Slider\Update::class)->name('slider.update');

//=======================================> //Special
Route::get('/special/product', Special\Product\Index::class)->name('special.product.index');

//=======================================>users
Route::get('/users', Users\IndexUser::class)->name('users.index');
Route::get('/users/update/{user}', Users\UpdateUser::class)->name('users.update');

//=======================================> //sellers
route::name('seller.')->group(function () {
    Route::get('/seller', Seller\Index::class)->name('index');
    Route::get('/seller/create', Seller\Create::class)->name('create');
    Route::get('/seller/update/{seller}', Seller\Update::class)->name('update');
});

//=======================================> //marketer
route::name('marketer.')->group(function () {
    Route::get('/marketer', marketer\Index::class)->name('index');
    Route::get('/marketer/create', marketer\Create::class)->name('create');
    Route::get('/marketer/update/{marketer}', marketer\Update::class)->name('update');
});

//=======================================> //Roles
Route::get('/role', Role\IndexRole::class)->name('role.index');
Route::get('/role/update/{role}', Role\UpdateRole::class)->name('role.update');

//=======================================> //Permissions
Route::get('/permission', Permission\IndexPermission::class)->name('permission.index');
Route::get('/permission/{user}', Users\PermissionUser::class)->name('permission.user');

//=======================================> //Dashboard
route::name('dashboard.')->group(function () {
    Route::get('/dashboard/favorite', Dashboard\Favorite::class)->name('favorite');
    Route::get('/dashboard/observed', Dashboard\Observed::class)->name('observed');
    Route::get('/dashboard/favlist', Dashboard\FavlistProfile::class)->name('favlist');
    Route::get('/dashboard/favlist/{favlist}', Dashboard\FavlistProfileShow::class)->name('favlist.show');
    Route::get('/dashboard/address', Dashboard\Address::class)->name('address');
    Route::get('/dashboard/address/recip', Dashboard\Address\Recip::class)->name('address.recip');
    Route::get('/dashboard/address/time', Dashboard\Address\Time::class)->name('address.time');
});

//=======================================> //orders
route::name('admin.orders.')->group(function () {
    Route::get('/orders', Order\Index::class)->name('index');
    Route::get('/orders/update/{order}', Order\IndexUpdate::class)->name('indexupdate');
    Route::get('/orders/show/{order_id}', Order\ShowOrder::class)->name('showOrder');
    Route::get('/orders/wait', Order\Wait::class)->name('wait');
    Route::get('/orders/progress', Order\Progress::class)->name('progress');
    Route::get('/orders/complete', Order\Complete::class)->name('complete');
    Route::get('/orders/returned', Order\Returned::class)->name('returned');
    Route::get('/orders/cancel', Order\Cancel::class)->name('cancel');
    Route::get('/orders/returndetail', Order\ReturnDetail::class)->name('returndetail');
    Route::get('/orders/returnreson', Order\ReturnReason::class)->name('returnreson');
    Route::get('/orders/returndetail/accept', Order\ReturnReasonAccept::class)->name('returnreson.accept');
    Route::get('/orders/returnreson/{returnOrder}', Order\ShowReturn::class)->name('showReturn');
});


//=======================================> //payment
route::name('admin.payment.')->group(function () {
    Route::get('/payment', Payment\Index::class)->name('index');
    Route::get('/payment/pay', Payment\Pay::class)->name('pay');
    Route::get('/payment/{payment}', Payment\ShowPayment::class)->name('show');
});


//=======================================> //comment
Route::get('/comment', Comment\CommentIndex::class)->name('admin.comment.index');
Route::get('/review', Comment\ReviewIndex::class)->name('admin.review.index');



//
////=======================================> //electronic-devices// اگر خواستید از حالت چند دیتابیسی استفاده کنید و برای هر دسته  یک دیتابیس داشته باشید فعال کنید
//Route::get('/category/electronic/slider',Categorypage\Electronic\Slider::class)->name('category.electronic.slider');
//Route::get('/category/electronic/amazing',Categorypage\Electronic\Amazing::class)->name('category.electronic.amazing');
//Route::get('/category/electronic/banner',Categorypage\Electronic\Banner::class)->name('category.electronic.banner');
//Route::get('/category/electronic/title',Categorypage\Electronic\Title::class)->name('category.electronic.title');
//Route::get('/category/electronic/product',Categorypage\Electronic\Product::class)->name('category.electronic.product');
////=======================================> //vehicle//
//Route::get('/category/vehicle/slider',Categorypage\Vehicle\Slider::class)->name('category.vehicle.slider');
//Route::get('/category/vehicle/amazing',Categorypage\Vehicle\Amazing::class)->name('category.vehicle.amazing');
//Route::get('/category/vehicle/title',Categorypage\Vehicle\Title::class)->name('category.vehicle.title');
//Route::get('/category/vehicle/product',Categorypage\Vehicle\Product::class)->name('category.vehicle.product');
//Route::get('/category/vehicle/banner',Categorypage\Vehicle\Banner::class)->name('category.vehicle.banner');
////=======================================> //apparel//
//Route::get('/category/apparel/slider',Categorypage\Apparel\Slider::class)->name('category.apparel.slider');
//Route::get('/category/apparel/amazing',Categorypage\Apparel\Amazing::class)->name('category.apparel.amazing');
//Route::get('/category/apparel/title',Categorypage\Apparel\Title::class)->name('category.apparel.title');
//Route::get('/category/apparel/product',Categorypage\Apparel\Product::class)->name('category.apparel.product');
//Route::get('/category/apparel/banner',Categorypage\Apparel\Banner::class)->name('category.apparel.banner');
//Route::get('/category/apparel/brand',Categorypage\Apparel\Brand::class)->name('category.apparel.brand');
////=======================================> //child//
//Route::get('/category/child/slider',Categorypage\Child\Slider::class)->name('category.child.slider');
//Route::get('/category/child/amazing',Categorypage\Child\Amazing::class)->name('category.child.amazing');
//Route::get('/category/child/title',Categorypage\Child\Title::class)->name('category.child.title');
//Route::get('/category/child/product',Categorypage\Child\Product::class)->name('category.child.product');
//Route::get('/category/child/banner',Categorypage\Child\Banner::class)->name('category.child.banner');
//Route::get('/category/child/brand',Categorypage\Child\Brand::class)->name('category.child.brand');
