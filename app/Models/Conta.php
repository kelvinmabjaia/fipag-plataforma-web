<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $table = 'PlanoContas';

    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];
    
}
