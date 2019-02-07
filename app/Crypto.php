<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crypto extends Model
{
    protected $fillable = [
        'nom', 'image', 'sigle',
    ];


    public function cotation() 
	{
		return $this->belongsTo('App\Cotation');
    }

    public function transaction() 
	{
		return $this->belongsTo('App\Transaction');
    }
}
