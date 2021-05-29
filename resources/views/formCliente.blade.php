@extends('layouts.template')
@section('title', 'Cadastrar Usuário')
@section('clienteform', 'active puff-in-center')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Cliente</h4>
                <p class="card-category">Dados de Cadastro do Cliente</p>
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
                <form method="post" action="{{route('formClienteAction')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Razão Social</label>
                                <input type="text" class="form-control" name="razao_social">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Nome Fantasia</label>
                                <input type="text" class="form-control" name="nome_fantasia">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">CNPJ</label>
                                <input type="text" class="form-control" name="cnpj">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Endereco</label>
                                <input type="text" class="form-control" name="endereco">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Telefone</label>
                                <input type="text" class="form-control" name="telefone">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Nome do Responsável</label>
                                <input type="text" class="form-control" name="nome_responsavel">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">CPF</label>
                                <input type="text" class="form-control" name="cpf">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Celular</label>
                                <input type="text" class="form-control" name="celular">
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