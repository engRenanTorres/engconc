<?php

use App\Http\Controllers\InstituteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',function(){
    return "Ola!";
});
