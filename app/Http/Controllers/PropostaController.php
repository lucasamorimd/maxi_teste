<?php

namespace App\Http\Controllers;

use App\Exports\PropostaExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StorePropostaRequest;

class PropostaController extends Controller
{
    public function showFormProposta()
    {
        $listaClientes = DB::select('SELECT id, razao_social FROM clientes');
        return view('formProposta', ['clientes' => $listaClientes]);
    }
    public function actionCadastraProposta(StorePropostaRequest $request)
    {
        //pdf ou doc
        if ($request->documento->extension() === 'pdf' || $request->documento->extension() === 'doc') {
            $cliente_nome = DB::selectOne(
                "SELECT razao_social FROM clientes WHERE id = :id",
                ['id' => $request->select_cliente]
            );
            $nameFile =  date('Y_m_d') . $cliente_nome->razao_social . '.' . $request->documento->extension();
            DB::insert('INSERT INTO propostas(
                id_cliente,
                servico,
                endereco_obra,
                valor_total,
                sinal,
                valor_parcela,
                quantidade_parcelas,
                data_inicio_pagamento,
                data_parcelas,
                arquivo_anexo,
                status

            ) 
            VALUES(
                :id_cliente,
                :servico,
                :endereco_obra,
                :valor_total,
                :sinal,
                :valor_parcela,
                :quantidade_parcelas,
                :data_inicio_pagamento,
                :data_parcelas,
                :arquivo_anexo,
                :status
            )', [
                'id_cliente' => $request->select_cliente,
                'servico' => $request->servico,
                'endereco_obra' => $request->endereco_obra,
                'valor_total' => $request->valor_total,
                'sinal' => $request->sinal,
                'valor_parcela' => $request->valor_parcela,
                'quantidade_parcelas' => $request->qtd_parcelas,
                'data_inicio_pagamento' => $request->data_inicio_pagamento,
                'data_parcelas' => $request->data_parcelas,
                'arquivo_anexo' => $nameFile,
                'status' => $request->select_status
            ]);
            $request->documento->storeAs('documents', $nameFile);
            $aviso = "Proposta cadastrada com sucesso!";
            $cor = "success";
        } else {
            $aviso = "Você não colocou um arquivo Válido, por favor verificar o tipo de arquivo (PDF ou DOC)";
            $cor = "danger";
        }
        return redirect()->route('home')->with('aviso', ['msg' => $aviso, 'cor' => $cor]);
    }
    public function showListProposta()
    {
        $listaProposta = DB::select('SELECT * FROM propostas as p INNER JOIN clientes as c ON p.id_cliente = c.id');
        return view('tablePropostas', [
            'listaPropostas' => $listaProposta
        ]);
    }
    public function export()
    {
        return Excel::download(new PropostaExport, 'proposta.xlsx');
    }
}
