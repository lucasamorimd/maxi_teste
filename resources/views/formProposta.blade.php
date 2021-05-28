@extends('layouts.template')
@section('title', 'Cadastrar Usuário')
@section('propostaform', 'active')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Proposta</h4>
                <p class="card-category">Dados da Proposta</p>
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{route('formPropostaAction')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Cliente</label>
                                <input type="text" class="form-control" name="cliente">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Endereço da Obra</label>
                                <input type="text" class="form-control" name="endereco_obra">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Valor Total</label>
                                <input type="number" class="form-control" name="valor_total">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Sinal</label>
                                <input type="number" class="form-control" name="sinal">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Quantidade de Parcelas</label>
                                <input type="number" class="form-control" name="qtd_parcelas">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Valor das Parcelas</label>
                                <input type="number" class="form-control" name="valor_parcelas">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Data de Início do pagamento</label>
                                <input type="date" class="form-control" name="data_inicio_pagamento">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Data das Parcelas</label>
                                <input type="text" class="form-control" name="data_parcelas">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Anexar Arquivo</label>
                                <input type="file" class="form-control" name="arquivo">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Status</label>
                                <input type="text" class="form-control" name="status">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection