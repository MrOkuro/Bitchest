<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideNavController extends Controller
{
    public function index()
    {            
    	return view('clients.partials.sidenav');
    }
}
