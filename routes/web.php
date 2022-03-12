<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;


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

Route::get('/' ,[PageController::class,'index'])->name('index');
Route::get('/login' ,[PageController::class,'login'])->name('login');
Route::get('/register' ,[PageController::class,'registation'])->name('register');
Route::get('/logout' ,[PageController::class,'logout'])->name('logout');

Route::post('/register',[PageController::class,'registersubmit'])->name('register.submit');

Route::post('/login',[PageController::class,'loginsubmit'])->name('login.submit');


Route::get('/user/viewprofile',[UserController::class,'viewProfile'])->name('user.viewProfile');
Route::get('/user/editprofile',[UserController::class,'editProfile'])->name('user.editProfile');
Route::post('/user/editprofile',[UserController::class,'editProfileSubmit'])->name('user.editProfileSubmit');
Route::get('/user/index',[UserController::class,'index'])->name('index');
Route::get('/user/flights',[UserController::class,'flights'])->name('user.flights');
//Route::post('/user/index',[UserController::class,'index'])->name('indexfs');
