<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class Index extends AdminControllerLivewire
{
    use WithPagination;

    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public $search;
    public function render()
    {
        $orders = $this->readyToLoad ? Order::
        orWhere('address_id', 'LIKE', "%{$this->search}%")->
        orWhere('order_number', 'LIKE', "%{$this->search}%")->
        orWhere('transaction_id', 'LIKE', "%{$this->search}%")->
        orWhere('type_send', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        return view('livewire.admin.order.index',compact('orders'));
    }
}
