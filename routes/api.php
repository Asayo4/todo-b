<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::apiResource('/todos/{todo:id}', TodoController::class);