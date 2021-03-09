<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::apiResource('/todo', TodoController::class);
Route::post('/todo', TodoController::class,'post');
Route::put('/todo', TodoController::class,'put');
Route::get('/todo', TodoController::class,'get');
Route::delete('/todo', TodoController::class,'delete');