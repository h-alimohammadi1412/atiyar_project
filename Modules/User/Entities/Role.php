<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    protected $fillable=['name','def'];

    public function permissions()
    {
        return $this->belongsToMany(Role::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
