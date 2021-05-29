@extends('layouts.template')
@section('clientetable', 'active')
@section('title', 'Lista de Clientes')
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">{{$cliente->razao_social}}</h4>
                <p class="card-category">Lista de propostas desse cliente.</p>
            </div>
            <div class="card-body">
                @if(count($propostas)>0)
                @foreach($propostas as $proposta)
                <div id="accordion" role="tablist">
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse{{$proposta->id}}" aria-expanded="true" aria-controls="collapseOne">
                                    {{$proposta->servico}}
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapse{{$proposta->id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">{{$cliente->razao_social}}</td>
                                                <td class="text-center">{{date('d/m/Y',strtotime($proposta->proposta_created_at))}}</td>
                                                <td class="text-center">{{date('d/m/Y',strtotime($proposta->data_inicio_pagamento))}}</td>
                                                <td>{{$proposta->servico}}</td>
                                                <td class="text-center">{{$proposta->quantidade_parcelas}}</td>
                                                <td class="text-center">{{number_format($proposta->sinal,2,',','.')}}</td>
                                                <td class="text-center">{{number_format($proposta->valor_parcela,2,',','.')}}</td>
                                                <td class="text-center">{{number_format($proposta->valor_total,2,',','.')}}</td>
                                                <td class="text-center">{{$proposta->status}}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="card">
                    <div class="card-body">
                        Não há dados cadastrados ainda.
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection