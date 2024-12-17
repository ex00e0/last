<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function(){return view('index');})->name('index');
