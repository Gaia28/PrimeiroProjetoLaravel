<?php

use App\Http\Controllers\LoginControllor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/', [LoginController::class, 'showForm']);
Route::post('validate_register', [LoginController::class,'processRegister']);
