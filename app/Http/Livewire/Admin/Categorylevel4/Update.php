<?php

namespace App\Http\Livewire\Admin\Categorylevel4;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\CategoryLevel4;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Log;

class Update extends AdminControllerLivewire
{
    use WithFileUploads;
    public CategoryLevel4 $categorylevel4;

    public $img;
    protected $rules = [
        'categorylevel4.title' => 'required|min:3',
        'categorylevel4.name' => 'required',
        'categorylevel4.link' => 'required',
        'categorylevel4.status' => 'nullable',
        'categorylevel4.parent' => 'nullable',
    ];
    public function categoryForm()
    {
        $this->validate();
        if ($this->img){
            $this->categorylevel4->img = $this->uploadImage('categorylevel4');
        }

        $this->categorylevel4->update($this->validate());
        if (!$this->categorylevel4->status) {
            $this->categorylevel4->update([
                'status' => 0
            ]);
        }
        $this->createLog('  دسته کودک','admin/categorylevel4', $this->categorylevel4->title,'آپدیت');
        alert()->success('دسته کودک با موفقیت ایجاد شد.', 'دسته کودک آپدیت شد.');

        return redirect(route('categorylevel4.index'));

    }

    public function render()
    {
        if ($this->categorylevel4->status == 1){
            $this->categorylevel4->status = true;
        }else
        {
            $this->categorylevel4->status = false;
        }
        $categorylevel4 = $this->categorylevel4;
        return view('livewire.admin.categorylevel4.update',compact('categorylevel4'));
    }
}
