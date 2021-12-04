@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('conteudo')

    <h3>Departamentos</h3>
    <ul>
        <li>Computadore</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

    <x-alerta titulo='Erro fatal' typeAlert='info'>
        <p><strong>Erro</strong></p>
        <p>Ocorreu um erro inesperado!</p>
    </x-alerta>

    <x-alerta titulo='Erro fatal' typeAlert='error'>
        <p><strong>Erro</strong></p>
        <p>Ocorreu um erro inesperado!</p>
    </x-alerta>

    <x-alerta titulo='Erro fatal' typeAlert='success'>
        <p><strong>Erro</strong></p>
        <p>Ocorreu um erro inesperado!</p>
    </x-alerta>

    <x-alerta titulo='Erro fatal' typeAlert='warning'>  
        <p><strong>Erro</strong></p>
        <p>Ocorreu um erro inesperado!</p>
    </x-alerta>

@endsection
