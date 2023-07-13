<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AdminController::class,'AdminSearchHost']);
Route::get('/search', [AdminController::class,'AdminSearch']);
Route::get('/host/list',[AdminController::class,'AdminHostList']);
Route::get('/host/add',[AdminController::class,'AdminHostAdd']);
Route::post('/host/add',[AdminController::class,'doAdminHostAdd']);
Route::get('/host/detail/{id}',[AdminController::class,'AdminHostDetail']);
Route::get('/host/detail/edit/{id}',[AdminController::class,'AdminHostEdit']);
Route::post('/host/detail/edit/{id}',[AdminController::class,'doAdminHostEdit']);
Route::get('/host/detail/internet/detail/{id}/{onuid}',[AdminController::class,'AdminInternetDetail']);
