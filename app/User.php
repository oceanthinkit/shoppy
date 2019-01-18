<?php

namespace App;

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


    public function user_create()
    {
        return $this->belongsTo('App\Users', 'delete_user_id');
    }

    public function user_update()
    {
        return $this->belongsTo('App\Users', 'delete_user_id');
    }

    public function user_delete()
    {
        return $this->belongsTo('App\Users', 'delete_user_id');
    }
}