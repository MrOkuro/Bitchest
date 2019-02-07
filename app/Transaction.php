<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'crypto_id', 'montant','montant_crypto','type','etat',
    ];

    public function user() 
	{
		return $this->hasOne('App\User');
    }

    public function crypto() 
	{
		return $this->hasOne('App\Crypto');
    }
}
