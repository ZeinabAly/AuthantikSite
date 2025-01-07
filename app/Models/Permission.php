<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;

class Permission extends Model
{
    use softDeletes;
    protected $guarded = ['id'];
    public function roles(){
        return $this->belongsToMany(Role::class, 'permission_role')->withTimestamps();
    }
}
