<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'Fornecedores';
    protected $primaryKey = 'Fornecedor';

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];

    protected $casts = [
        'Fornecedor' => 'string',
    ];

}
