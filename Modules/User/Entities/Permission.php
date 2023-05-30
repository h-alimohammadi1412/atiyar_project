<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasFactory;
    protected $fillable=['name','def'];

    public function roles()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
