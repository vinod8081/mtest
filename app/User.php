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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Get the account details for the user.
     */
    public function account()
    {
        return $this->hasOne('Modules\Mtest\Models\Account');
    }

    /**
     * Get the posts for the logged user.
     */
    public function posts()
    {
        return $this->hasMany('Modules\Mtest\Models\Posts');
    }
}
