<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShhController extends Controller
{

    public function checkout()
    {
        return view('checkout');
    }
}
