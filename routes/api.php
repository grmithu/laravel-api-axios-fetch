<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ajax/get/{name?}',[AjaxController::class,'getRequest']);
Route::get('/ajax/getJSON',[AjaxController::class,'getJSON']);
Route::get('/ajax/getData/{data}',[AjaxController::class,'getError']);
Route::get('/ajax/getHeader',[AjaxController::class,'getHeader']);
Route::post('/ajax/post',[AjaxController::class,'postRequest']);
Route::put('/ajax/put/{id}',[AjaxController::class,'putRequest']);
Route::patch('/ajax/patch/{id}',[AjaxController::class,'patchRequest']);
Route::delete('/ajax/delete/{id}',[AjaxController::class,'deleteRequest']);






