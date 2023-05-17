<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('obtenerPalindromo') }}" method="post">
        @csrf
        <input type="text" name="cad">
        @error('cad')
            {{ message }}
        @enderror
        <button type="submit">
            Verificar
        </button>
        @isset($resul)
            La cadena: {{ $cad }} {{ $resul }} palindromo
        @endisset
    </form>
</body>

</html>
