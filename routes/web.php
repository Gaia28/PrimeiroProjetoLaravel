<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


//ROTAS AUTENTICAÇÃO
Route::get('/', [LoginController::class, 'showForm']);
Route::post('validar-login', [LoginController::class,'validarLogin']);

//ROTAS EMPRESAS
Route::get('cadastre-sua-empresa', [EmpresaController::class, 'create'])->name('empresas.create');
Route::post('cadastro-empresa', [EmpresaController::class, 'store'])->name('empresas.store');
Route::get('/empresas', [EmpresaController::class, 'index']);

//ROTA HOME
Route::get('home', [HomeController::class,'index'])->name('homi');

//ROTAS DE USUARIOS
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route:: get('/users/create', [UserController:: class, 'create'])->name('users.create');
Route::post('/users/store', [UserController:: class, 'store'])->name('users.store');
Route::post('user/{user}', [UserController:: class, 'show'])->name('users.show');

