@extends('layouts.template')
@section('home', 'active')
@section('content')
@if(session('aviso'))
<div class="alert alert-{{session('aviso')['cor']}}" role="alert">
    {{session('aviso')['msg']}}
</div>
@endif
<div class="row justify-content-center">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="puff-in-center">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <a href="#">
                        <div class="card-icon">
                            <i class="material-icons" style="color:#fff;">account_balance</i>
                        </div>
                    </a>
                    <p class="card-category">Clientes</p>
                    <h3 class="card-title">
                        {{count($clientes)}}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">

                        Total geral de clientes cadastrados
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">

        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <a href="#">
                    <div class="card-icon">
                        <i class="material-icons" style="color:#fff;">event</i>
                    </div>
                </a>
                <p class="card-category">Propostas</p>
                <h3 class="card-title">
                    {{count($propostas)}}
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    Total geral de propostas.
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <a href="#">
                        <div class="card-icon">
                            <i class="material-icons" style="color:#fff;">account_circle</i>
                        </div>
                    </a>
                    <p class="card-category">Usuários</p>
                    <h3 class="card-title">
                        {{count($usuarios)}}
                    </h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        Total de usuários cadastrados.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection