<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controlador extends Controller
{

    public function amigosFormulario()
    {
        return view('formulario', ['nombreFuncion' => 'amigos']);
    }

    public function amigos(Request $request)
    {
        $num1 = $request->numero1;
        $num2 = $request->numero2;

        if ($num1 <= 0 || $num2 <= 0) {
            return "Por favor, ingresa números enteros positivos.";
        }
    }

    $p = 3 * pow(2, $num1 - 1) - 1;
    $q = 3 * pow(2, $num1) - 1;
    $r = 9 * pow(2, (2 * $num1) - 1) - 1;

    if (!$this->esPrimo($p) || !$this->esPrimo($q) || !$this->esPrimo($r)) {
        return "Los números proporcionados no generan números amigos.";
    }

    $amigo1 = 2 * $p * $q;
    $amigo2 = 2 * $r;

    if ($amigo1 == $num2 || $amigo2 == $num2) {
        return "Los números $num1 y $num2 son números amigos.";
    } else {
        return "Los números $num1 y $num2 no son números amigos.";
    }
}

public function primosFormulario()
{
    return view('formulario', ['nombreFuncion' => 'primos']);
}

public function primos(Request $request)
{
    $num = $request->numero;

    if ($num <= 1) {
        return "Por favor, ingresa un número entero positivo mayor que 1.";
    }

    if ($this->esPrimo($num)) {
        return "El número $num es primo.";
    } else {
        return "El número $num no es primo.";
    }
}

private function esPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

public function promedioFormulario()
    {
        return view('formulario', ['nombreFuncion' => 'promedio']);
    }

    public function promedio(Request $request)
    {
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;

    if ($nota1 < 0 || $nota2 < 0 || $nota3 < 0) {
        return "Por favor, ingresa notas válidas (números mayores o iguales a cero).";
    }

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    return "El promedio de las notas $nota1, $nota2 y $nota3 es: $promedio";
}

public function cuadraticaFormulario()
    {
        return view('formulario', ['nombreFuncion' => 'cuadratica']);
    }

    public function cuadratica(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;

    if ($a == 0) {
        return "El coeficiente 'a' debe ser diferente de cero para una ecuación cuadrática.";
    }

    $discriminante = pow($b, 2) - (4 * $a * $c);

    if ($discriminante < 0) {
        return "La ecuación cuadrática no tiene raíces reales.";
    }

    $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);

    return "Las raíces de la ecuación cuadrática $a*x^2 + $b*x + $c = 0 son: x1 = $raiz1 y x2 = $raiz2";
}

}
