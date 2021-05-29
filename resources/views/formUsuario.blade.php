@extends('layouts.template')
@section('title', 'Cadastrar Usuário')
@section('usuario', 'active')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Usuário</h4>
                <p class="card-category">Dados de Cadastro</p>
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
                <form method="post" action="{{route('formUsuarioAction')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nome do Usuário</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Senha</label>
                                <input type="password" class="form-control" name="senha">
                            </div>
                            <div class="form-group">
                                <label class="bmd-label-floating">Confirme sua Senha</label>
                                <input type="password" class="form-control" name="confirma_senha">
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