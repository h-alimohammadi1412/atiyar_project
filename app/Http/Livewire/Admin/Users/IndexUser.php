<?php

namespace App\Http\Livewire\Admin\Users;

use App\Http\Controllers\AdminControllerLivewire;
use App\Models\Log;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class IndexUser extends AdminControllerLivewire
{
    use WithFileUploads;
    use WithPagination;

    protected $listeners = [
        'user.added' => '$refresh'
    ];
    protected $paginationTheme = 'bootstrap';
    public $img;
    public $search;
    protected $queryString = ['search'];
    public $readyToLoad = false;
    public User $user;

    public function mount()
    {
        $this->user = new User();
    }


    protected $rules = [
        'user.admin' => 'nullable',
        'user.staff' => 'nullable',
        'user.name' => 'nullable',
        'user.mobile' => 'nullable',
        'user.email' => 'nullable',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function userForm()
    {

        $this->validate();

        $user = User::query()->create([
            'name' => $this->user->name,
            'mobile' => $this->user->mobile,
            'email' => $this->user->email,
            'admin' => $this->user->admin ? true : false,
            'staff' => $this->user->staff ? true : false,
        ]);

        if ($this->img) {
            $user->update([
                'img' => $this->uploadImage('user')
            ]);
        }

        $this->user->mobile = "";
        $this->user->email = "";
        $this->user->name = "";
        $this->user->staff = false;
        $this->user->admin = false;
        $this->img = null;

        $this->createLog('کاربر','admin/users',$this->user->name,'ایجاد');

        alert()->success(' کاربر با موفقیت ایجاد شد.', ' کاربر با موفقیت ایجاد شد.');

    }


    public function loadUser()
    {
        $this->readyToLoad = true;
    }

    public function updateUserDisable($id)
    {
        $user = user::find($id);
        $user->update([
            'email_verified_at' => now()
        ]);

        alert()->success('ایمیل کاربر با موفقیت تایید شد.', 'ایمیل کاربر با موفقیت تایید شد.');
    }


    public function deleteUser($id)
    {
        $user = user::find($id);
        $user->delete();

        alert()->success(' کاربر با موفقیت حذف شد.', ' کاربر با موفقیت حذف شد.');

    }


    public function render()
    {

        $users = $this->readyToLoad ? User::where('name', 'LIKE', "%{$this->search}%")->
        orWhere('email', 'LIKE', "%{$this->search}%")->
        orWhere('mobile', 'LIKE', "%{$this->search}%")->
        orWhere('id', $this->search)->
        latest()->paginate(15) : [];

        return view('livewire.admin.users.index-user', compact('users'));
    }
}
