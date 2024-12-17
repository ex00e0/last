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

// LOGIN
Route::post('/login', [PageController::class, 'login'])->name('login');


// AFISHA
Route::get('/', [PageController::class, 'get_all_events']);
// INDEX LIMIT 3 EVENT 
Route::get('/limit_3', [PageController::class , 'limit_3'])->name('limit_3');
// INDEX NEWS LIMIT 4
Route::get('/news', [PageController::class, 'limit_4'])->name('news');


// ADMIN

// ROUTE LINK ONE EVENT TO UPDATE
Route::get('/events/{id?}', [PageController::class, 'get_all_events'])->name('index');
// POST QUERY CREATE EVENT
Route::post('/create_event', [PageController::class, 'create_event'])->name('create_event');
// POST QUERY UPDATE EVENT
Route::post('/update_event', [PageController::class, 'update_event'])->name('update_event');
// ADMIN DELETE EVENT
Route::get('/delete_event/{id}', [PageController::class, 'delete_event'])->name('delete_event');


// POST CRAETE NEWS
Route::post('/create_news', [PageController::class, 'create_news'])->name('create_news');
// UPDATE GET VIEW
Route::get('/news/{id?}', [PageController::class, 'limit_4'])->name('news_u');
// UPDATE POST UPDATE NEWS
Route::post('/update_news', [PageController::class, 'update_news'])->name('update_news');
// DELETE NEWS ADMIN 
Route::get('/news_d/{id}', [PageController::class, 'news_d'])->name('news_d');


// MORE INFO
Route::get('/news_more/{id}', [PageController::class, 'news_more'])->name('news_m');
Route::get('/event_more/{id}', [PageController::class, 'event_more'])->name('event_more');