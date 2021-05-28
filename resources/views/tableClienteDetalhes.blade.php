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
                <div id="accordion" role="tablist">
                    <div class="card card-collapse">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </a>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection