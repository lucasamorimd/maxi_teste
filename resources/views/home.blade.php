@extends('layouts.template')
@section('home', 'active')
@section('content')
@if(session('aviso'))
{{session('aviso')}}
@endif
@endsection