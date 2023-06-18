<?php

namespace App\Http\Livewire\Home\Cart;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\UserHistory;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Index extends AdminControllerLivewire
{
    public $total_price_products = 0;
    public $total_price_cart = 0;
    public $total_discount_price_cart = 0;
    public $cartProduct = [];
    public function deleteCartProduct($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
        }
        $this->emit('toast', 'success', 'محصول از سبد شما حذف شد');
    }
    public function addToCartOtherFromCart($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->update([
                'type' => 1
            ]);
        }
        $this->emit('toast', 'success', 'محصول به لیست خرید بعدی شما اضافه شد.');
    }

    public function addAllToCart()
    {
        $userIp = Request::ip();
        if (auth()->user()->id) {
            $cart_others = Cart::where('user_id', auth()->user()->id)->where('type', 1)->get();
        } else {
            $cart_others = Cart::where('ip', $userIp)->where('type', 1)->get();
        }
        foreach ($cart_others as $cart_other) {
            $cart_other->update([
                'type' => 0
            ]);
        }
        $this->emit('toast', 'success', ' تمام محصول به لیست خرید بعدی شما اضافه شدند.');
    }

    public function updateBasket()
    {
        $this->getCartProduct();
    }
    public function updateCountProduct($id, $operation)
    {
        $cart = Cart::with('productSeller')->find($id);
        // dd($cart->count);
        if ($operation == 'add') {
            if ($cart->productSeller->limit_order > $cart->count) {
                $cart->update([
                    'count' => $cart->count + 1
                ]);
                $this->emit('toast', 'success', 'محصول آپدیت شد');
            } else {
                $this->emit('toast', 'error', 'حداکثر تعداد سفارش برای این محصول ');
            }
        } elseif ($operation == 'minus') {
            if ($cart->count > 1) {
                $cart->update([
                    'count' => $cart->count - 1
                ]);
            }
            $this->emit('toast', 'success', 'محصول آپدیت شد');
        }
    }
    public function shipping($carts)
    {
        dd($this->cartProduct);
        if (auth()->user()) {
            $userIp2 = Request::ip();
            if (sizeof($carts) > 0) {
                $order = Order::all()->last();
                $order_number = '111111111';
                if ($order) {
                    $order_number = $order->order_number + 1;
                }
                $order =   Order::create([
                    'user_id' => auth()->user()->id,
                    'order_number' => $order_number,
                    'payment' => 0,
                    'total_price' => $this->CalPricesCart($carts)['total_price'],
                    'total_discount_price' => $this->CalPricesCart($carts)['total_discount_price'],
                    'ip' => $userIp2,

                ]);
                foreach ($carts as $cart) {
                    $this->CreateOrderProduct($cart, $order);
                }
                return $this->redirect(route('order.shipping'));
            }

            $this->helperAlert('warning', ' هیچ محصولی در سبد خرید ندارید.');
            return;
        }
        return $this->redirect('/login');
    }
    public function CreateOrderProduct($cart, $order)
    {
        OrderProduct::create([
            'order_id' =>  $order->id,
            'order_number' =>  $order->order_number,
            'product_seller_id' => $cart['product_seller']['id'],
            'product_id' => $cart['product_seller']['product_id'],
            'color_id' => $cart['product_seller']['color_id'],
            'warranty_id' => $cart['product_seller']['warranty_id'],
            'seller_id' => $cart['product_seller']['vendor_id'],
            'price' => $cart['product_seller']['price'],
            'discount_price' => $cart['product_seller']['discount_price'],
            'anbar_id' => $cart['product_seller']['anbar'],
            'product_available_count' => $cart['product_seller']['product_count'],
            'product_sale_count' => $cart['product_seller']['limit_order'],
            'count_cart' => $cart['count'],
        ]);
    }
    public function CalPricesCart($carts)
    {
        $total_price = 0;
        $total_discount_price = 0;
        foreach ($carts as $cart) {
            $total_price += $cart['product_seller']['price'] * $cart['count'];
            $total_discount_price += $cart['product_seller']['discount_price'] * $cart['count'];
        }

        return ['total_price' => $total_price, 'total_discount_price' => $total_discount_price];
    }
    function getCartProduct()
    {

        $userIp = Request::ip();
        if (auth()->user()) {
            $cartIps = Cart::where('ip', $userIp)->get();
            if ($cartIps) {
                foreach ($cartIps as $cartIp) {
                    $res = Cart::where(['product_seller_id' => $cartIp->product_seller_id, 'user_id' => auth()->user()->id, 'ip' => null])->get();
                    if (!$res) {
                        $cartIp->update([
                            'user_id' => auth()->user()->id
                        ]);
                    }
                }
            }
            $this->cartProduct = Cart::with(['productSeller' => ['product', 'color', 'warranty', 'vendor']])->where(['user_id' => auth()->user()->id, 'type' => 0])->get();
        } else {
            $this->cartProduct = Cart::where('ip', $userIp)->where('type', 0)->get();
        }
        $this->total_price_products = 0;
        $this->total_price_cart = 0;
        $this->total_discount_price_cart = 0;
        $changePrices = [];
        foreach ($this->cartProduct as $cart) {
            $this->total_price_products += ($cart->productSeller->price * $cart->count);
            $this->total_price_cart += ($cart->productSeller->discount_price * $cart->count);
            $this->total_discount_price_cart += ($cart->productSeller->price - $cart->productSeller->discount_price);
            $cart->update([
                'view' => $cart->view + 1
            ]);
            if ($cart->view >= 2) {
                $cart->update([
                    'read_cart' => 1
                ]);
            }
        }
    }
    public function loaddingPage(){
        $this->readyToLoad = true;
    }

    public function render()
    {
        if($this->readyToLoad){
            $this->getCartProduct();
        }else{
            $this->cartProduct = [];
        }
       
        $carts = $this->cartProduct;
        if (auth()->check()) {
            $userHistories = UserHistory::with('product')->where('user_id', auth()->user()->id)->get();
        } else {
            $userHistories = [];
        }
        return view(
            'livewire.home.cart.index',
            compact('carts', 'userHistories')
        )->layout('layouts.home1');
    }
}
