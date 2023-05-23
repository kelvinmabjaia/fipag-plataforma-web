<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    use HasFactory;
    use \Awobaz\Compoships\Compoships;

    public function newQuery($excludeDeleted = true) {
        return parent::newQuery($excludeDeleted)
            ->where('TipoConta', '=', 'M'); // Movimentos
    }

    protected $table = 'PlanoCentros';

    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    public function orcamentos(){
        return $this->hasMany(Orcamento::class, ['Centro', 'Ano'], ['Centro', 'Ano']);
    }

}
