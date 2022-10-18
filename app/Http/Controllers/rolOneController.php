<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rolOneController extends Controller
{
     public function show() 
    {
        return view('auth.partials.rolOne');
    }
}
