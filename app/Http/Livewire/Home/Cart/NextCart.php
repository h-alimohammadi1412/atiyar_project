<?php

namespace App\Http\Livewire\Home\Cart;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Cart;
use Illuminate\Support\Facades\Request;

class NextCart extends AdminControllerLivewire
{
    public $nextCartProduct = [];
    public function deleteCartProduct($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
        }
        $this->helperAlert('success', 'محصول از سبد شما حذف شد');
    }
    public function addAllToCart()
    {
        if(sizeof($this->nextCartProduct) == 0){
            $this->helperAlert('success', 'لیست خرید بعدی شما خالی است.');
            return;
        }
        if (auth()->user()->id) {
            $cart_others = Cart::where('user_id', auth()->user()->id)->where('type', 1)->get();
        } else {
            $userIp = Request::ip();
            $cart_others = Cart::where('ip', $userIp)->where('type', 1)->get();
        }
        foreach ($cart_others as $cart_other) {
            $cart_other->update(['type' => 0]);
        }
        $this->helperAlert('success', ' تمام محصول به لیست خرید بعدی شما اضافه شدند.');
    }
    public function addToCartFromCartOther($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->update([
                'type' => 0
            ]);
        }
        $this->helperAlert('success', 'محصول به سبد اصلی خرید شما اضافه شد.');
    }
    public function render()
    {
        if ($this->readyToLoad) {
            if(auth()->check()){
                $carts = Cart::with(['productSeller' => ['product', 'color', 'warranty', 'vendor']])->where(['user_id' => auth()->user()->id, 'type' => 1])->get();
            }else{
                $ip = Request::ip();
                $carts = Cart::with(['productSeller' => ['product', 'color', 'warranty', 'vendor']])->where(['ip' => $ip, 'type' => 1])->get();
            }
            $this->nextCartProduct = $carts;
        } else {
            $carts = [];
        }
        return view('livewire.home.cart.next-cart',compact('carts'))->layout('layouts.home1');
    }
}
