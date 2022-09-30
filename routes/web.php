<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller ;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create',[customcontroller::class,'create']);
Route::post('/store',[customcontroller::class,'store']);
Route::get('/viewdata',[customcontroller::class,'viewdata'])->middleware('auth');
Route::get('delete/{id?}',[customcontroller::class,'delete']);
Route::get('edit/{id?}',[customcontroller::class,'edit'])->middleware('auth');
Route::post('update/{id?}',[customcontroller::class,'update']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
