<?php

namespace App\Http\Livewire\Home\Cart;


use App\Models\Cart;
use App\Models\Order;
use App\Models\PriceDate;
use App\Models\ProductSeller;
use App\Models\UserHistory;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;

class Index extends Component
{
    //    public \App\Models\Gift $gift;
    //
    //    public function mount()
    //    {
    //        $this->gift = new \App\Models\Gift();
    //    }
    //
    //    protected $rules = [
    //        'gift.newcard' => 'nullable',
    //    ];
    //
    //    public function updated($newcard)
    //    {
    //        $this->validateOnly($newcard);
    //    }
    //
    //    public function giftForm()
    //    {
    //        $this->validate();
    //        $newcode = \App\Models\Gift::where('code',$this->gift->newcard)->first();
    //        if ($newcode) {
    //            $newcode->update([
    //                'user_id' => auth()->user()->id,
    //                'type' => 1,
    //            ]);
    //            $this->emit('toast', 'success', ' کد هدیه وارد شده ثبت شد.');
    //        }else
    //        {
    //            $this->emit('toast', 'error', ' کد هدیه وارد شده وجود ندارد.');
    //        }
    //
    //    }
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
    public function shipping()
    {
        if (auth()->user()) {
            $carts = Cart::where('user_id', auth()->user()->id)
                ->where('type', 0)->get();

            $userIp2 = Request::ip();
            $location = Location::get($userIp2);
            if ($carts) {
                $order = Order::all()->last();
                if ($order) {
                    foreach ($carts as $cart) {
                        $orders =   Order::create([
                            'user_id' => auth()->user()->id,
                            'order_number' => $order->order_number + 1,
                            'product_id' => $cart->product_id,
                            'product_seller_id' => $cart->product_seller_id,
                            'payment' => 0,
                            'product_color' => $cart->product_color,
                            'total_price' => $cart->product_price,
                            'total_discount_price' => $cart->product_price_discount,
                            'ip' => $userIp2,
                            'count' => $cart->count,
                            'product_vendor' => $cart->product_vendor,
                            'product_warranty' => $cart->product_warranty,

                        ]);
                    }
                } else {
                    $number = '111111111';
                    foreach ($carts as $cart) {
                        $orders =    Order::create([
                            'user_id' => auth()->user()->id,
                            'order_number' => $number,
                            'product_id' => $cart->product_id,
                            'product_seller_id' => $cart->product_seller_id,
                            'payment' => 0,
                            'product_color' => $cart->product_color,
                            'total_price' => $cart->product_price,
                            'total_discount_price' => $cart->product_price_discount,
                            'ip' => $userIp2,
                            'count' => $cart->count,
                            'product_vendor' => $cart->product_vendor,
                            'product_warranty' => $cart->product_warranty,

                        ]);
                    }
                }


                return $this->redirect(route('order.shipping'));
            } else {
                $this->emit('toast', 'error', ' هیچ محصولی در سبد خرید ندارید.');
            }

            dd($carts);
        } else {
            return $this->redirect('/login');
        }
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
            // $cart_read_cart = Cart::where('user_id', auth()->user()->id)->where('type', 0)
            //     ->where('read_cart', 0)->first();
            // $cart_others = Cart::where('user_id', auth()->user()->id)->where('type', 1)->get();
        } else {
            $this->cartProduct = Cart::where('ip', $userIp)->where('type', 0)->get();
            // $cart_others = Cart::where('ip', $userIp)->where('type', 1)->get();
            // $cart_read_cart = Cart::where('ip', $userIp)->where('type', 0)
            //     ->where('read_cart', 0)->first();
        }
        $this->total_price_products = 0;
        $this->total_price_cart = 0;
        $this->total_discount_price_cart = 0;
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

    public function render()
    {
       
        $this->getCartProduct();



        // $cart_first = $carts->first();
        ///test
        // if ($cart_first) {

        // $priceDate = PriceDate::where('product_id', $cart_first->product_id)->get();
        // $priceDate_min_price = PriceDate::where('product_id', $cart_first->product_id)->
        // orderBy('discount_price', 'ASC')->get();
        // $priceDate_min_Date = PriceDate::where('product_id', $cart_first->product_id)->
        // orderBy('updated_at', 'ASC')->get();

        // ///
        // $priceDate_min_Date_first = PriceDate::where('product_id', $cart_first->product_id)->
        // orderBy('updated_at', 'ASC')->first();

        // $priceDate_min_price_first = PriceDate::where('product_id', $cart_first->product_id)->
        // orderBy('discount_price', 'ASC')->first();
        // $priceDate_min_price_first1 = PriceDate::where('product_id', $cart_first->product_id)->
        // orderBy('discount_price', 'ASC')->get()[1];

        // if ($priceDate_min_price_first1) {
        //     $date1 = $priceDate_min_price_first->updated_at;
        //     $date2 = $priceDate_min_price_first1->updated_at;
        //     $different = $date2->diff($date1);
        //     $day = $different->format('%d');
        //     $mo = $different->format('%m');

        $carts = $this->cartProduct;
        $userHistories = UserHistory::with('product')->where('user_id',auth()->user()->id)->get();
        // dd($userHistories);
        return view(
            'livewire.home.cart.index',
            compact('carts','userHistories')
        )->layout('layouts.home1');
        // }
        // } else {
        // return view('livewire.home.cart.index'
        //     , compact('carts', 'cart_others', 'cart_read_cart'))
        //     ->layout('layouts.home1');
        // }
        // 
        // return view('livewire.home.cart.index')->layout('layouts.home');
    }
}
