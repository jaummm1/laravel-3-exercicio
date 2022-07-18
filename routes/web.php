<?php

use App\Http\Controllers\PlaceController;
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


Route::get('/hello/{nome}', [PlaceController::class, 'hello']);    
Route::get('/dbz/{energy}', [PlaceController::class, 'dbz']);  
Route::get('/clients/{names}', [PlaceController::class, 'clients']);  


Route::get('/places', [PlaceController::class, 'index']);
Route::get('/places/create', [PlaceController::class, 'create']);
Route::post('/places/store', [PlaceController::class, 'store']);
Route::get('/places/show/{place}', [PlaceController::class, 'show']);
Route::get('/places/edit/{place}', [PlaceController::class, 'edit']);
Route::post('/places/update/{place}', [PlaceController::class, 'update']);
Route::get('/places/delete/{place}', [PlaceController::class, 'destroy']);


