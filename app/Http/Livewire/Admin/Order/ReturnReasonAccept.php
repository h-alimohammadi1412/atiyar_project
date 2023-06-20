<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Log;
use App\Models\ReturnOrder;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class ReturnReasonAccept extends AdminControllerLivewire
{
    use WithPagination;
    protected $listeners = [
        'category.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';
    public $search;

    protected $queryString = ['search'];
    public $readyToLoad = false;
    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    public function confirmReturnOrder($id)
    {
        $returnOrder = ReturnOrder::find($id);
        $returnOrder->update([
            'status'=>1
        ]);
        alert()->success('مرجوعی کالا با موفقیت تایید شد.', ' مرجوعی کالا با موفقیت تایید شد.');

    }
    public function render()
    {
        $returnOrders = ReturnOrder::where('status','1')->
            latest()->paginate(20);

        return view('livewire.admin.order.return-reason-accept',compact('returnOrders'));
    }
}
