<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropostaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'select_cliente'=>'required',
            'servico'=>'required',
            'select_status'=>'required',
            'endereco_obra'=>'required',
            'valor_total'=>'required',
            'sinal'=>'required',
            'qtd_parcelas'=>'required',
            'valor_parcela'=>'required',
            'data_inicio_pagamento'=>'required',
            'data_parcelas'=>'required',
            'documento'=>'required'
        ];
    }
    public function messages(){
        return[

            'select_cliente.required'=>'É preciso selecionar um cliente para fazer o cadastro.',
            'servico.required'=>'Qual será o serviço realizado?.',
            'select_status.required'=>'É necessário saber se a proposta está em aberto ou fechada.',
            'endereco_obra.required'=>'Onde será a obra?',
            'valor_total.required'=>'Quanto custará a obra?',
            'sinal.required'=>'De quanto será o sinal?',
            'qtd_parcelas.required'=>'Em quantas parecelas será dividido?',
            'valor_parcela.required'=>'Qual será o valor de cada parcela?',
            'data_inicio_pagamento.required'=>'Quando será a data do pagamento da primeira parcela?',
            'data_parcelas.required'=>'Quais as datas de cada parcela?',
            'documento.required'=>'Anexe um documento para prosseguir.'
        ];
        
    }
}
