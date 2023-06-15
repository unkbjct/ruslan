<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewsController extends Controller
{
    public function catalog(Request $request)
    {
        return view('catalog');
    }
}
