<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function(){return view('index');})->name('index');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login_db', [PageController::class, 'login_db'])->name('login_db');