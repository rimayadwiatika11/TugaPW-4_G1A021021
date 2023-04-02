<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntalogiBookController extends Controller
{
    public function index()
    {
        return view('AntalogiBook');
    }
}
