<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    public function index()
    {

        //$cryto = Crypto::all());
     
    	return view('crypto.index');
    }
}
