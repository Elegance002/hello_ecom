<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name','slug','permission'=>'array'];


    public function users() {

        return $this->belongsToMany(User::class,'staffs');
       
    }

    
}
