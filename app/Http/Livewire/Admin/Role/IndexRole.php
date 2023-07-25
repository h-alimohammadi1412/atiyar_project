<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Category;
use App\Models\Log;
use App\Models\PermissionRole;
use App\Models\Role;
use App\Models\SubCategory;
use App\Http\Controllers\AdminControllerLivewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IndexRole extends AdminControllerLivewire
{
    use WithPagination;
    public $permissions;
    protected $listeners = [
        'category.added' => '$refresh'
    ];
    public Role $role;
    public function mount()
    {
        $this->role = new Role();
    }


    protected $rules = [
        'role.name' => 'required',
        'role.def' => 'nullable',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }
    public function roleForm()
    {

        $this->validate();
        $role =  Role::query()->create([
            'name' => $this->role->name,
            'def' => $this->role->def,
        ]);
        foreach ($this->permissions as $permission){
            PermissionRole::create([
                'permission_id' => $permission,
                'role_id' => $role->id,
            ]);
        }


        $this->role->name = "";
        $this->role->def = "";
        $this->permissions = false;
        $this->createLog('مقام', 'admin/role', $this->role->name, 'ایجاد');
        alert()->success('مقام با موفقیت ایجاد شد.', ' مقام با موفقیت ایجاد شد.');

    }

    public function deleteRole($id)
    {
        $role = Role::find($id);
            $role->delete();
        $this->createLog('مقام', 'admin/role', $this->role->name, 'حذف');

            alert()->success('مقام با موفقیت حذف شد.', ' مقام با موفقیت حذف شد.');


    }


    public function render()
    {

        $roles = $this->readyToLoad ? Role::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('def', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.role.index-role',compact('roles'));
    }
}
