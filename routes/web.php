<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PropostaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome');

//Ações para Usuário
Route::get('/usuario', [UsuarioController::class, 'showFormUsuario']);
Route::post('/cadastra-usuario', [UsuarioController::class, 'actionCadastraUsuario']);
Route::get('/lista-usuario', [UsuarioController::class, 'showListUsuario']);

//Ações para Clientes
Route::get('/cliente', [ClienteController::class, 'showFormCliente']);
Route::post('/cadastra-cliente', [ClienteController::class, 'actionCadastraCliente']);
Route::get('/lista-cliente', [ClienteController::class, 'showListCliente']);
Route::post('/cliente/{nome}', [ClienteController::class, 'showClienteByName']);

//Ações para Propostas
Route::get('/proposta', [PropostaController::class, 'showFormProposta']);
Route::post('/cadastra-proposta', [PropostaController::class, 'actionCadastraProposta']);

Route::fallback(function () {
    return view('404');
});
