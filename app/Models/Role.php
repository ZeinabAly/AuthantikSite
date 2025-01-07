<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{User, Permission};


class Role extends Model
{
    use softDeletes;

    protected $guarded = ['id'];

    public function users(){
        return $this->belongsToMany(User::class, 'role_user')->withTimestamps();
    }
    public function permissions(){
        return $this->belongsToMany(Permission::class, 'permission_role')->withTimestamps();
    }
}
