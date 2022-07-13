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

Route::get('/detail',function(){ return view('detail'); });
Route::get('/addMovie',function(){ return view('add-movie'); })->middleware('auth');
Route::post('/saveMovie',[\App\Http\Controllers\Pages\PagesController::class,'save_movie'])->name('save.movie');

Route::get('/home',function(){
    return redirect('/dashboard');
});

Route::get('/dashboard',function(){ return view('dashboard'); })->middleware('auth');

