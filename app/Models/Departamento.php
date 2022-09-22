<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $guarded = [];

    // DEPARTAMENTO PERTENCE A ...
    public function regiao() { return $this->belongsTo(Regiao::class); }

    // DEPARTAMENTO POSSUI ...
    public function processos() { return $this->hasMany(Processo::class); }
    
}
