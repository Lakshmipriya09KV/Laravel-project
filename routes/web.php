<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/',[CrudController::class,'index']);
Route::get('users', [CrudController::class, 'index']);
Route::get('users/register',[CrudController::class, 'register']);
Route::post('users/register',[CrudController::class,'store']);
Route::get('users/{id}/edit',[CrudController::class,'edit']);
Route::put('users/{id}/register',[CrudController::class,'update']);
Route::get('users/{id}/delete',[CrudController::class,'delete']);