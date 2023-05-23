<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;
    use \Awobaz\Compoships\Compoships;

    public function newQuery($excludeDeleted = true) {
        return parent::newQuery($excludeDeleted)
            ->where('Orcamento', '=', 'CONTROLO'); // Orçamento
    }

    protected $table = 'OrcamentosCentrosContas'; 
    protected $primaryKey = 'Conta';

    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];
    
    public function Centro(){
        return $this->belongsTo(Centro::class, ['Centro', 'Ano'], ['Centro', 'Ano']);
    }

    public function Conta(){
        return $this->belongsTo(Conta::class, 'Conta', 'Conta');
    }

}
