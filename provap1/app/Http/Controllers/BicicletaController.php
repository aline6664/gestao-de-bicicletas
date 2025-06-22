<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bicicleta;

class BicicletaController extends Controller
{
    public function list() {
        $bicicletas = Bicicleta::all(); // pegando todos dados do Model
        return view('index', ['bicicletas' => $bicicletas]); // passando os dados para a view
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        // dd($request); // dump data, mostra todos os dados apos o envio do formulario

        // validação dos dados antes da inserção ao database
        $data = $request->validate([
            'bic_modelo' => 'required',
            'bic_fabricante' => 'required',
            'bic_cor' => 'required',
            'bic_opcionais' => 'nullable' // campo opcional
        ]);

        // passando os dados ao Model
        $newBicicleta = Bicicleta::create($data);

        return redirect()->route('bicicleta.index')->with('success', 'Bicicleta cadastrada com sucesso!');
    }
}