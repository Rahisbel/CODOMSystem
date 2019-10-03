<?php

namespace App;

use App\Role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->hasMany('App\Role');
    }

    /*public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }*/

    /*public function authorizeRoles($roles)
    {
        abort_unless($this->hasMany($roles), 401);
        return true;
    }*/

    /*public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
             }
        }else{
                if ($this->hasRole($roles)) {
                     return true; 
                }   
            }
            return false;
        } 

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }*/




}
