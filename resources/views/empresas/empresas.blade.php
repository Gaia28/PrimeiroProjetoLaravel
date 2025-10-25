@extends('layouts/app')
@section('title', 'Listagem das empresas')

@section('content')
     @foreach ($empresas as $empresa)
            <li>
                {{ $empresa['razao-social']}} - 
                {{ $empresa->email }} - 
                {{ $empresa->cnpj }}
            </li>
        @endforeach
@endsection