<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function calcularFactorial(Request $request)
    {
        $request->validate([
            'n' => 'required|numeric|min:1|max:20',
        ]);
        $n = intval($request->n);
        $prod = 1;
        for ($i = 1; $i <= $n; $i++)
            $prod *= $i;
        return view('vistaFactorial', compact('n', 'prod'));
    }

    function calcularPalindromo(Request $request)
    {
        $request->validate([
            'cad' => 'required',
        ]);
        $cad = $request->cad;
        $lower = strtolower(str_replace(" ", "", $cad));
        $inv = strrev($lower);
        $resul = $lower == $inv ? "ES" : "NO es";
        return view('vistaPalindromo', compact('cad', 'resul'));
    }
}
