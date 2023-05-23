<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicao extends Model
{
    use HasFactory;
    
    public function newQuery($excludeDeleted = true) {
        return parent::newQuery($excludeDeleted)
            ->where('TipoDoc', 'REC');
    }

    protected $table = 'CabecCompras';
    protected $primaryKey = 'Id';    
    protected $keyType = 'string';

    public function entidadeFornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'Entidade', 'Fornecedor');
    }

    public function linhas()
    {
        return $this->hasMany(RequisicaoLinhas::class, 'IdCabecCompras', 'Id');
    }

    protected $casts = [
        'Entidade' => 'string',
    ];

}
