@extends('layouts.template')
@section('clientetable', 'active')
@section('title', 'Lista de Clientes')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">Lista de Clientes</h4>
                <p class="card-category">Todos os Clientes cadastrados</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-success table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Razão Social</th>
                                <th class="text-center">Nome Fantasia</th>
                                <th class="text-center">CNPJ</th>
                                <th class="text-center">Endereço</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Telefone</th>
                                <th class="text-center">Nome do Responsável</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Detalhar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($listaClientes)>0)
                            @foreach($listaClientes as $cliente)
                            <tr>
                                <td class="text-center">{{$cliente->razao_social}}</td>
                                <td class="text-center">{{$cliente->nome_fantasia}}</td>
                                <td class="text-center">{{$cliente->cnpj}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td class="text-center">{{$cliente->email}}</td>
                                <td class="text-center">{{$cliente->telefone}}</td>
                                <td class="text-center">{{$cliente->nome_responsavel}}</td>
                                <td class="text-center">{{$cliente->cpf}}</td>
                                <td class="text-center">{{$cliente->celular}}</td>
                                <td class="td-actions text-center">
                                    <a class="btn btn-info btn-simple" href="{{route('tableClienteDetalhe',$cliente->id)}}">
                                        <i class="material-icons">info</i>
                                    </a>
                                </td>

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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection