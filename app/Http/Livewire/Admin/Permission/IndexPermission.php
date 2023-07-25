<?php

namespace App\Http\Livewire\Admin\Permission;

use App\Models\Log;
use App\Models\Permission;
use App\Models\Role;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithPagination;

class IndexPermission extends AdminControllerLivewire
{
    use WithPagination;
    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public Permission $permission;
    public function mount()
    {
        $this->permission = new Permission();
    }


    protected $rules = [
        'permission.name' => 'required',
        'permission.def' => 'nullable',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }
    public function roleForm()
    {

        $this->validate();

        $permission =  Permission::query()->create([
            'name' => $this->permission->name,
            'def' => $this->permission->def,
        ]);


        $this->permission->name = "";
        $this->permission->def = "";
        $this->createLog(' دسترسی', 'admin/permission',$this->permission->name, 'ایجاد');

        alert()->success('دسترسی با موفقیت ایجاد شد.', ' دسترسی با موفقیت ایجاد شد.');

    }

    public function deleteRole($id)
    {
        $role = Permission::find($id);
        $role->delete();
        $this->createLog(' دسترسی', 'admin/permission',$this->permission->name, 'حذف');

        alert()->success('دسترسی با موفقیت حذف شد.', ' دسترسی با موفقیت حذف شد.');


    }


    public function render()
    {

        $permissions = $this->readyToLoad ? Permission::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('def', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.permission.index-permission',compact('permissions'));
    }
}
