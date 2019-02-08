<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crypto;
use App\User;
use App\Transaction;



class TransactionController extends Controller
{
    public function show($crypto_id)
    {
        $transactions = Transaction::where('crypto_id','=',$crypto_id)->with(['crypto'])->get();
        $crypto = Crypto::find($crypto_id);        
    	return view('crypto.show_liste_transaction',compact('crypto','transactions'));
    }
}

