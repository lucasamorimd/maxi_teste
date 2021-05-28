<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'razao_social' => 'required',
            'nome_fantasia' => 'required',
            'cnpj' => 'required',
            'endereco' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'nome_responsavel' => 'required',
            'cpf' => 'required',
            'celular' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'razao_social.required' => 'Você não preencheu a razão social',
            'nome_fantasia.required' => 'Qual o nome fantasia do Cliente?',
            'cnpj.required' => 'Precisa do CNPJ',
            'endereco.required' => 'Qual é o endereço do cliente?',
            'email.required' => 'Email não preenchido!',
            'telefone.required' => 'Precisamos entrar em contato, coloque um telefone do Cliente',
            'nome_responsavel.required' => 'Diga o nome de um responsável',
            'cpf.required' => 'É necessário um CPF',
            'celular.required' => 'Pode repetir o telefone, caso não haja celular.'
        ];
    }
}
