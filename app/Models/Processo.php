<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    protected $guarded = [];

    // PROCESSO PERTENCE A ...
    public function departamento() { return $this->belongsTo(Departamento::class); }

}
