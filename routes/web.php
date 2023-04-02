<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\HijrahBookController;
use App\Http\Controllers\AntalogiBookController;
use App\Http\Controllers\TimeBookController;

Route::get('/', [HomePageController::class, 'index']);
Route::get('/HijrahBook', [HijrahBookController::class, 'index']);
Route::get('/AntalogiBook', [AntalogiBookController::class, 'index']);
Route::get('/TimeBook', [TimeBookController::class, 'index']);


