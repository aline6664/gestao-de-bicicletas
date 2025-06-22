<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicicletaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bicicleta', [BicicletaController::class, 'list'])->name('bicicleta.index');
// Rota de GET, caminho URL, controller, método do controller e nome da rota (para referenciar)

Route::get('/bicicleta/create', [BicicletaController::class, 'create'])->name('bicicleta.create');

// rota para enviar o form (recebe o POST)
Route::post('/bicicleta', [BicicletaController::class, 'store'])->name('bicicleta.store');