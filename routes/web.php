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
    return view('form.create');
});


Route::get('/create',[customcontroller::class,'create']);
Route::post('/store',[customcontroller::class,'store']);
Route::get('/viewdata',[customcontroller::class,'viewdata']);
Route::get('delete/{id?}',[customcontroller::class,'delete']);
Route::get('edit/{id?}',[customcontroller::class,'edit']);
Route::post('update/{id?}',[customcontroller::class,'update']);