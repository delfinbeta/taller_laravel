<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>
    <h1>Admin Saludo</h1>

    <h2>Condicional IF</h2>
    @if (isset($name))
    <p>Hola {{ $name }}</p>
    @endif

    <p>Tu edad es: {{ $age }}</p>
    <hr>

    <h2>Condicional ELSE - IF</h2>
    @if ($age < 2)
        <p>Es un bebé.</p>
    @elseif (($age >= 2) && ($age < 12))
        <p>Es un niño.</p>
    @elseif (($age >= 12) && ($age < 18))
        <p>Es un adolescente.</p>
    @else
        <p>Es un adulto.</p>
    @endif
    <hr>

    <h2>Directiva de Autenticacion</h2>
    @auth
        The user is authenticated...
    @endauth

    @guest
        The user is not authenticated...
    @endguest
    <hr>

    <h2>Ciclo FOR</h2>
    @for ($i = 0; $i < 10; $i++)
        <p>The current value is {{ $i }}</p>
    @endfor
    <hr>

    <h2>Ciclo FOREACH</h2>
    <ul>
    @foreach ($data as $item)
        @if ($loop->first)
            <li style="background-color: #0000FF;">{{ $item }}</li>
        @else
            <li>{{ $item }}</li>
        @endif                

        <p>Indice: {{ $loop->index }}</p>
        <p>ITeracion: {{ $loop->iteration }}</p>
        <p>Iteraciones restantes: {{ $loop->remaining }}</p>
        <p>Total de Elementos: {{ $loop->count }}</p>
        <p>Anidamiento: {{ $loop->depth }}</p>
    @endforeach
    </ul>
    <hr>

    <h2>Ciclo FOREACH anidado</h2>
    <ul>
    @foreach ($data as $item)
        @if ($loop->first)
            <li style="background-color: #0000FF;">
        @else
            <li>
        @endif

            {{ $item }}

            <ul>
            @foreach ($data2 as $item2)
                <li>{{ $item2 }}</li>
                <p>Anidamiento: {{ $loop->depth }}</p>
                <p>Padre: {{ $loop->parent->odd }}</p>
            @endforeach
            </ul>
        </li>        

        <p>Indice: {{ $loop->index }}</p>
        <p>ITeracion: {{ $loop->iteration }}</p>
        <p>Iteraciones restantes: {{ $loop->remaining }}</p>
        <p>Total de Elementos: {{ $loop->count }}</p>
        <p>Anidamiento: {{ $loop->depth }}</p>
        <p>Padre: {{ $loop->parent }}</p>
    @endforeach
    </ul>
    <hr>

    <h2>Ciclo While</h2>
    @php
        $finded = false;
        $j = 0;
    @endphp
    @while (!$finded)
        @php
            if ($j == 5) $finded = true;
        @endphp
        <p>I'm missing [{{ $j }}].</p>
        @php
            $j++;
        @endphp
    @endwhile
</body>
</html>
