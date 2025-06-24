<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BicicletaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bicicleta', [BicicletaController::class, 'list'])->name('bicicleta.index');
// Rota de GET, caminho URL, controller, método do controller e nome da rota (para referenciar)
// Acessa o método list do BicicletaController e retorna a view index com os dados das bicicletas.

Route::get('/bicicleta/create', [BicicletaController::class, 'create'])->name('bicicleta.create');
// Chama o método create para exibir o formulário de cadastro 

// rota para enviar o form (recebe o POST)
Route::post('/bicicleta', [BicicletaController::class, 'store'])->name('bicicleta.store');

// rota para pagina de alterar
Route::get('/bicicleta/{bicicleta}/edit', [BicicletaController::class, 'edit'])->name('bicicleta.edit');
                        // pega o ID da bicicleta a ser alterada, passa para o controller

// rota para realizar a atualizacao dos dados, recebido do formulario
Route::put('/bicicleta/{bicicleta}', [BicicletaController::class, 'update'])->name('bicicleta.update');
    // put e um metodo para atualizar dados

// rota para deletar dado
Route::delete('/bicicleta/{bicicleta}/delete', [BicicletaController::class, 'delete'])->name('bicicleta.delete');
