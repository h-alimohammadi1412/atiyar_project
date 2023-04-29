<?php

namespace App\Http\Livewire\Admin\Log;

use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $img;
    public $search;

    protected $queryString = ['search'];

    public $readyToLoad = false;

    public function loadCategory()
    {
        $this->readyToLoad = true;
    }

    

    public function render()
    {

        $logs = $this->readyToLoad ? Log::with('user')->where('actionType', 'LIKE', "%{$this->search}%")->
        orWhere('user_id', 'LIKE', "%{$this->search}%")->
        orWhere('url', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];
        // dd(Log::date($logs[5]->created_at));
        return view('livewire.admin.log.index',compact('logs'));
    }
}
