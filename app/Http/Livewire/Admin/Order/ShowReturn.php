<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\ReturnOrder;
use App\Http\Controllers\AdminControllerLivewire;

class ShowReturn extends AdminControllerLivewire
{
    public ReturnOrder $returnOrder;

    public function render()
    {
        $returnOrder = $this->returnOrder;
        return view('livewire.admin.order.show-return',compact('returnOrder'));
    }
}
