<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bicicletas', function (Blueprint $table) {
            $table->id('bic_cod');
            $table->string('bic_modelo', 30); // == VARCHAR(30)
            $table->string('bic_fabricante', 15);
            $table->string('bic_opcionais', 30);
            $table->string('bic_cor', 15);
            $table->timestamps(); // cria os campos created_at e updated_at,
                                  // informando data e hora de criação/atualização
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bicicletas');
    }
};
