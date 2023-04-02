<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeBookController extends Controller
{
    public function index()
    {
        return view('TimeBook');
    }
}
