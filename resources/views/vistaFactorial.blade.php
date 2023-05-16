<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="container mx-auto bg-slate-200">
        <h1 class="text-3xl text-center font-bold underline">
            Factorial
        </h1>
        <form action="{{ route('obtenerFactorial') }}" method="post">
            @csrf
            <input type="number" name="n" min="1" max="20" required>
            @error('n')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit">
                Calcular
            </button>
        </form>
        @isset($prod)
            <section>
                La factorial de {{ $n }} es: {{ $prod }}
            </section>
        @endisset
    </section>
</body>

</html>
