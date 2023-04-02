<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HijrahBookController extends Controller
{
    public function index()
    {
        return view('HijrahBook');
    }
}
