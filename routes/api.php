<?php

use App\Http\Controllers\ConcursoController;
use App\Http\Controllers\InstituteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/institute',[InstituteController::class,'store']);
Route::get('/institute',[InstituteController::class,'index']);
Route::get('/institute/{id}',[InstituteController::class,'show']);
Route::patch('/institute/{id}',[InstituteController::class,'update']);
Route::delete('/institute/{id}',[InstituteController::class,'destroy']);

Route::apiResources([
    '/concurso' => ConcursoController::class,
]);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
