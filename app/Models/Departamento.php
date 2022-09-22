<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function regiao()
    {
        return $this->belongsTo(Regiao::class, 'regiao_id', 'id');
    }
    
}
