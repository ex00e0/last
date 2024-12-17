<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function(){return view('index');})->name('index');
Route::get('/all_events', function(){return view('all_events');})->name('all_events');
Route::get('/all_news', function(){return view('all_news');})->name('all_news');
Route::get('/one_new', function(){return view('one_new');})->name('one_new');


Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login_db', [PageController::class, 'login_db'])->name('login_db');