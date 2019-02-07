<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function wallet(){
        return $this->belongsTo('App\Wallet');
    }

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function isAdmin(){
        if($this->admin == 1){
            return true;
        }
        return false;
    }
}
