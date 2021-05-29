<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalClientes = DB::select('SELECT * FROM clientes');
        $totalPropostas = DB::select('SELECT * FROM propostas');
        $totalUsuarios = DB::select('SELECT * FROM usuarios');
        return view(
            'home',
            [
                'clientes' => $totalClientes,
                'propostas' => $totalPropostas,
                'usuarios' => $totalUsuarios
            ]
        );
    }
}
