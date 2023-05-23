<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisicaoLinhas extends Model
{
    use HasFactory;

    public function newQuery($excludeDeleted = true) {
        return parent::newQuery($excludeDeleted);
            // ->where('TipoLinha', '=', '21'); // Cotação
    }
    
    protected $table = 'LinhasCompras';
    protected $keyType = 'string';
    protected $primaryKey = 'IdCabecCompras';

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
