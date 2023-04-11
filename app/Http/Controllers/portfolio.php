<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolio extends Controller
{
    public function index()
    {
        return view('pfoth');
    }

    public function pen()
    {
        return view('pfoen');
    }
}
