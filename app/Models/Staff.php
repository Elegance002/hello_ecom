<?php

namespace App\Models;

use App\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable =['user_id','role_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}

