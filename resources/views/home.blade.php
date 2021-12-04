<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
</head>
<body>

    {{-- @switch($valor)
        @case(100)
            Igual a 100
            @break
        @case(10)
            Igual a 10
            @break

        @default
            Outro valor
    @endswitch --}}

    {{-- @for ($i = 0; $i < 10; $i++)
    <p>valor: {{ $i }} </p>
    @endfor --}}

    {{-- <ul>
    @foreach ($nomes as $nome)
        <li>{{ $nome }}</li>
    @endforeach
    </ul> --}}

    {{-- @forelse ($nomes as $nome)
        <p>{{ $nome }}</p>
    @empty
        <p>Não existem nomes</p>
    @endforelse --}}

    @foreach ( $nomes as $nome)

        @if ($loop->first)
            {{$nome}}
        @endif

        @if ($loop->last)
            {{$nome}}
        @endif

    @endforeach

</body>
</html>
