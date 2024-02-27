<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>

    @isset($nombreFuncion)
        <h2>{{ $nombreFuncion }}</h2>
    @endisset

    <form method="POST">
        @csrf

        @if($nombreFuncion === 'amigos')
            <label>
                Ingrese el número 1:
                <br>
                <input type="number" name="numero1">
            </label>
            <br>
            <label>
                Ingrese el número 2:
                <br>
                <input type="number" name="numero2">
            </label>
        @elseif($nombreFuncion === 'primos')
            <label>
                Ingrese un número:
                <br>
                <input type="number" name="numero">
            </label>
        @elseif($nombreFuncion === 'promedio')
            <label>
                Ingrese la nota 1:
                <br>
                <input type="number" name="nota1">
            </label>
            <br>
            <label>
                Ingrese la nota 2:
                <br>
                <input type="number" name="nota2">
            </label>
            <br>
            <label>
                Ingrese la nota 3:
                <br>
                <input type="number" name="nota3">
            </label>
        @elseif($nombreFuncion === 'cuadratica')
            <label>
                Coeficiente a:
                <br>
                <input type="number" name="a">
            </label>
            <br>
            <label>
                Coeficiente b:
                <br>
                <input type="number" name="b">
            </label>
            <br>
            <label>
                Coeficiente c:
                <br>
                <input type="number" name="c">
            </label>
        @endif

        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
</body>
</html>
