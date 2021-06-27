<?php

namespace App;

use App\Models\Role;
use App\Models\Staff;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'user_type','name','avatar','avatar_original','email', 'password','phone','address','country','city','postal_code','balance','banned','referral_code','customer_package_id','remaining_uploads'
    ];


    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'staffs', 'user_id', 'role_id');
    // }

    public function staff()
    {
    return $this->hasOne(Staff::class);
    }
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
