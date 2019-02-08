<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crypto;

class AchatController extends Controller
{
    public function index()
    {
        $cryptos = Crypto::all();   	
        return view('crypto.achat',compact('cryptos'));
    }
}
