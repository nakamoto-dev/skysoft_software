<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontEnd;
use App\Http\Controllers\backEnd;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| URL=>https://google.com/myaccount?id=1
| BASE_URL=>https://google.com
| PROTOCOL=>HTTPS
| URI=>myaccount(route);
| id=param
| 1= value
|
*/

Route::get('test', function(){
return view('test');
});

Route::get('/',[frontEnd::class,'home']);
Route::get('/about',[frontEnd::class,'about']);
Route::get('/services',[frontEnd::class,'services']);
Route::get('/works',[frontEnd::class,'works']);
Route::get('/technology',[frontEnd::class,'technology']);
Route::get('/contact',[frontEnd::class,'contact']);

