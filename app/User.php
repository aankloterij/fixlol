<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'department_id', 'location_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fix()
    {
        return $this->hasMany(Fix::class, 'user_id', 'id');
    }

    public function department()
    {
        return $this->hasOne('department', 'id', 'department_id');
    }

    public function location()
    {
        return $this->hasOne('location', 'id', 'location_id');
    }
}
