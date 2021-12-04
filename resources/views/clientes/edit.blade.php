@extends('layouts.principal')

@section('titulo', 'Clientes - Edit')

@section('conteudo')
    <h3>Editando Cliente</h3>

    <form action="{{route('clientes.update', $cliente['id'])}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" id="" value="{{$cliente['nome']}}">
        <input type="submit" value="Salvar">
    </form>

@endsection
