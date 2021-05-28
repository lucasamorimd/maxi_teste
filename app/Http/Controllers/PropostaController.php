<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePropostaRequest;
use Illuminate\Http\Request;

class PropostaController extends Controller
{
    public function showFormProposta()
    {
        return view('formProposta');
    }
}
