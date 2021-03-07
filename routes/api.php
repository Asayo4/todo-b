<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::apiResource('/todo', TodoController::class);
Route::post('/', [TodoController::class]);
Route::get('/', [TodoController::class]);
Route::put('/', [TodoController::class]);
Route::delete('/', [TodoController::class]);