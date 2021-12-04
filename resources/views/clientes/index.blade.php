@extends('layouts.principal')

@section('titulo', 'Clientes')


@section('conteudo')

    <h3>{{$titulo}}:</h3>
    <a href="{{route('clientes.create')}}">NOVO CLIENTE</a>
    @if (!empty($clientes))
        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{$c['id']}} - {{$c['nome']}} | <a href="{{route('clientes.edit', $c['id'])}}">Editar</a>
                    <a href="{{route('clientes.show', $c['id'])}}">Info</a>
                    <form action="{{route('clientes.destroy', $c['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
            @endforeach
        </ul>

        <hr>

        @for($i = 0; $i < 10; $i++)
            {{ $i }},
        @endfor

        <br>

        @for($i = 0; $i < count($clientes); $i++)
            {{ $clientes[$i]['nome']}}
            @if ($i < count($clientes) - 1)
                {{',' }}
            @else
                {{ '.' }}
            @endif
        @endfor
        <br>

        @foreach ($clientes as $c)
        <!--FOREACH nos dá acesso a variável $loop-->
            <p>
                {{$c['nome']}} |
                @if ($loop->first)
                    (primeiro) |
                @endif

                @if ($loop->last)
                    (último)
                @endif
                ({{ $loop->index }}) - {{ $loop->iteration}} / {{ $loop->count }}
            </p>
        @endforeach
    @else
    <h3>Não há clientes cadastrados!</h3>
    @endif
@endsection
