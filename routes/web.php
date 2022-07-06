<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Pages\PagesController::class,'homepage']);

Route::get('/login',function(){ return view('login'); });
Route::get('/detail',function(){ return view('detail'); });
Route::get('/dashboard',function(){ return view('dashboard'); });

