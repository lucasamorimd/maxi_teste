@extends('layouts.template')
@section('propostatable', 'active')
@section('title', 'Lista de Propostas')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">Lista de Propostas</h4>
                <p class="card-category">Todas as Propostas cadastradas</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-success table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Cliente</th>
                                <th class="text-center">Proposta feita em</th>
                                <th class="text-center">Início do pagamento</th>
                                <th class="text-center">Serviços</th>
                                <th class="text-center">Qtde. de Parcelas</th>
                                <th class="text-center">Sinal R$</th>
                                <th class="text-center">Valor Parcela R$</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Anexo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($listaPropostas)>0)
                            @foreach($listaPropostas as $proposta)
                            <tr>
                                <td class="text-center">{{$proposta->razao_social}}</td>
                                <td class="text-center">{{date('d/m/Y',strtotime($proposta->proposta_created_at))}}</td>
                                <td class="text-center">{{date('d/m/Y',strtotime($proposta->data_inicio_pagamento))}}</td>
                                <td>{{$proposta->servico}}</td>
                                <td class="text-center">{{$proposta->quantidade_parcelas}}</td>
                                <td class="text-center">{{number_format($proposta->sinal,2,',','.')}}</td>
                                <td class="text-center">{{number_format($proposta->valor_parcela,2,',','.')}}</td>
                                <td class="text-center">{{number_format($proposta->valor_total,2,',','.')}}</td>
                                <td class="text-center">{{$proposta->status}}</td>
                                <td class="text-center"><a href="#">{{$proposta->arquivo_anexo}}</a></td>
                            </tr>
                            @endforeach
                            @else
                            <div class="card">
                                <div class="card-body">
                                    Não há dados cadastrados ainda.
                                </div>
                            </div>
                            @endif
                        </tbody>
                    </table>
                    <a href="{{route('exportTableProposta')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Exportar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection