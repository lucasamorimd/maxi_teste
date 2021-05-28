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
                <form enctype="multipart/form-data" method="post" action="{{route('formPropostaAction')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="gender3">Cliente</label>
                                            </div>
                                            <select class="custom-select" id="gender3" name="select_cliente">
                                                <option selected>Escolha...</option>
                                                @if(count($clientes)>0)
                                                @foreach($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->razao_social}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="gender3" >Status</label>
                                            </div>
                                            <select class="custom-select" id="gender3" name="select_status">
                                                <option selected>Escolha...</option>
                                                <option value="aberto">Aberto</option>
                                                <option value="fechado">Fechado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Serviço</label>
                                        <input type="text" class="form-control" name="servico">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Endereço da Obra</label>
                                        <input type="text" class="form-control" name="endereco_obra">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Valor Total</label>
                                        <input type="number" class="form-control" name="valor_total">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Sinal</label>
                                        <input type="number" class="form-control" name="sinal">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Quantidade de Parcelas</label>
                                <input type="number" class="form-control" name="qtd_parcelas">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Valor das Parcelas</label>
                                <input type="number" class="form-control" name="valor_parcela">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Data de Início do pagamento</label>
                                <input type="date" class="form-control" name="data_inicio_pagamento">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Data das Parcelas</label>
                                <input type="text" class="form-control" name="data_parcelas">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Anexar Arquivo</label>
                                <input class="form-control" type="file" name="documento" id="formFile">
                            </div>
                            <div class="row">

                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection