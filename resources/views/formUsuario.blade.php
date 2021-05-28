@extends('layouts.template')
@section('title', 'Cadastrar Usuário')
@section('usuario', 'active')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Setor</h4>
                <p class="card-category">Dados de Cadastro</p>
            </div>
            <div class="card-body">

                <form method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nome do Setor</label>
                                <input type="text" class="form-control" name="setor">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Coordenador(a)</label>
                                <input type="text" class="form-control" name="coordenador">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
                        <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection