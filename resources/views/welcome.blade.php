<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-3xl text-center bg-blue-500 font-bold underline">
        Ejercicios de programación
    </h1>
    <a href="{{ route('factorial') }}">Factorial</a>
    |
    <a href="{{ route('palindromo') }}">Palindromo</a>
</body>

</html>
