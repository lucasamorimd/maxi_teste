<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function showFormCliente()
    {
        return view('formCliente');
    }
    public function actionCadastraCliente(StoreClienteRequest $request)
    {
        $razao_social = $request->input('razao_social');
        $nome_fantasia = $request->input('nome_fantasia');
        $cnpj = $request->input('cnpj');
        $endereco = $request->input('endereco');
        $email = $request->input('email');
        $telefone = $request->input('telefone');
        $nome_responsavel = $request->input('nome_responsavel');
        $cpf = $request->input('cpf');
        $celular = $request->input('celular');

        DB::insert('INSERT INTO clientes(
            razao_social, 
            nome_fantasia, 
            cnpj, 
            endereco,
            email, 
            telefone,
            nome_responsavel,
            cpf,
            celular)
            VALUES(
            :razao_social,
            :nome_fantasia,
            :cnpj,
            :endereco,
            :email,
            :telefone,
            :nome_responsavel,
            :cpf,
            :celular)', [
            'razao_social' => $razao_social,
            'nome_fantasia' => $nome_fantasia,
            'cnpj' => $cnpj,
            'endereco' => $endereco,
            'email' => $email,
            'telefone' => $telefone,
            'nome_responsavel' => $nome_responsavel,
            'cpf' => $cpf,
            'celular' => $celular
        ]);
        return redirect()->route('home')->with('aviso', 'Cliente cadastrado!');
    }

    public function showListCliente()
    {
        $lista = DB::select('SELECT * FROM clientes');
        return view('tableClientes', [
            'listaClientes' => $lista
        ]);
    }
}
