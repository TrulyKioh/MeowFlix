<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tela_inicial');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/cadastro', [AuthController::class, 'showCadastro'])->name('Cadastro');
Route::post('/cadastro', [AuthController::class, 'cadastro']);

Route::get('/criacao_de_filme', function () {
    return view('criacao_de_filme');
})->middleware('auth');

Route::get('/editar_filme', function () {
    return view('editar_filme');
})->middleware('auth');
