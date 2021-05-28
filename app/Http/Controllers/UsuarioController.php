<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function showFormUsuario()
    {
        return view('formUsuario');
    }
    public function actionCadastraUsuario(StoreUsuarioRequest $request)
    {
        if ($request->filled('nome', 'email', 'senha')) {
            $nome_usuario = $request->input('nome');
            $email_usuario = $request->input('email');
            $senha_usuario = password_hash($request->input('senha'), PASSWORD_DEFAULT);
            DB::insert('INSERT INTO usuarios(nome, email, senha) VALUES(:nome,:email,:senha)', [
                'nome' => $nome_usuario,
                'email' => $email_usuario,
                'senha' => $senha_usuario,
            ]);
            $aviso = "Usuário cadastrado";
        } else {
            $aviso = "Erro no cadastro";
        }
        return redirect()->route('home')->with('aviso', $aviso);
    }
}
