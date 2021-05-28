<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showFormCliente()
    {
        return view('formCliente');
    }
    public function actionCadastraCliente()
    {
    }
}
