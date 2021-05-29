<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PropostaExport implements FromView
{
    public function view(): View
    {
        $listaProposta = DB::select('SELECT * FROM propostas as p INNER JOIN clientes as c ON p.id_cliente = c.id');
        return view('exports.propostas', [
            'listaPropostas' => $listaProposta
        ]);
    }
}
