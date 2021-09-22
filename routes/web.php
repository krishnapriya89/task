<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\demo;

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
Route::view('log','login');
Route::post('showlog',[demo::class,'adminlogin']);

Route::view('studlog','studentlog');
Route::post('studlog',[demo::class,'studentlogin']);
Route::view('stud','studreg');
Route::post('studr',[demo::class,'studregdata']);

Route::view('admin','adminhome');
Route::get('adlogout',[demo::class,'adminlogout']);
Route::view('stpro','studhome');
 Route::view('ups','update');
Route::get('up/{x}',[demo::class,'updatedata']);
Route::post('upl/{x}',[demo::class,'updateprofile']);

Route::get('st',[demo::class,'homeview']);
Route::get('out',[demo::class,'logout']);
Route::get('back',[demo::class,'goback']);

// active inactive student
Route::get('act',[demo::class,'activestu']);
Route::get('goto',[demo::class,'activego']);

Route::get('inact',[demo::class,'inactstu']);
Route::get('go',[demo::class,'inactgo']);





