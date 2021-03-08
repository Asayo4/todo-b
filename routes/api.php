<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::apiResource('/todo', TodoController::class);
Route::post('/todo', [TodoController::class]);
Route::get('/todo', [TodoController::class]);
Route::put('/todo', [TodoController::class]);
Route::delete('/todo', [TodoController::class]);