<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{

    protected $primaryKey = 'bic_cod';
    
    protected $fillable = [
        // id e timestamps são auto-incrementados
        'bic_modelo',
        'bic_fabricante',
        'bic_opcionais',
        'bic_cor'
    ];
}
