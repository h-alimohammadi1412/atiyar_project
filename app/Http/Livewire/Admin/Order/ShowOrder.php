<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class ShowOrder extends AdminControllerLivewire
{


    public Order $order;

    public function render()
    {
        $order = $this->order;
        return view('livewire.admin.order.show-order',compact('order'));
    }
}
