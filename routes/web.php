<?php

use App\Http\Controllers\CalculosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('factorial', function () {
    return view('vistaFactorial');
})->name('factorial');

Route::post('obtenerFactorial', [CalculosController::class, 'calcularFactorial'])->name('obtenerFactorial');

Route::get('palindromo', function () {
    return view('vistaPalindromo');
})->name('palindromo');

Route::post('obtenerPalindromo', [CalculosController::class, 'calcularPalindromo'])->name('obtenerPalindromo');
