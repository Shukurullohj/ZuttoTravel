<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoAddressController extends Controller
{
    public function googleAutoAddress()
    {
    	return view('location');
    }
}
