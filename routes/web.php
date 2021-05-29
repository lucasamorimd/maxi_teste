<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PropostaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Ações para Usuário
Route::prefix('/usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'showFormUsuario'])->name('usuario');
    Route::post('/cadastra-usuario', [UsuarioController::class, 'actionCadastraUsuario'])->name('formUsuarioAction');
    Route::get('/lista-usuario', [UsuarioController::class, 'showListUsuario'])->name('tableUsuario');
});

//Ações para Clientes
Route::prefix('/cliente')->group(function () {
    Route::get('/', [ClienteController::class, 'showFormCliente'])->name('cliente');
    Route::post('/cadastra-cliente', [ClienteController::class, 'actionCadastraCliente'])->name('formClienteAction');
    Route::post('/pesquisa', [ClienteController::class, 'showClienteByName'])->name('tableClienteByName');
    Route::get('/detalhes-cliente/{id}', [ClienteController::class, 'showClienteDetalhes'])->name('tableClienteDetalhe');
    Route::get('/lista-cliente', [ClienteController::class, 'showListCliente'])->name('tableClientes');
});

//Ações para Propostas
Route::prefix('proposta')->group(function () {
    Route::get('/', [PropostaController::class, 'showFormProposta'])->name('proposta');
    Route::get('/lista-propostas', [PropostaController::class, 'showListProposta'])->name('tablePropostas');
    Route::post('/cadastra-proposta', [PropostaController::class, 'actionCadastraProposta'])->name('formPropostaAction');
    Route::get('/exportar', [PropostaController::class, 'export'])->name('exportTableProposta');
});

Route::fallback(function () {
    return view('404');
});
