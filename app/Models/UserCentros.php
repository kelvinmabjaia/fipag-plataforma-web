<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCentros extends Model
{
    use HasFactory;

    protected $table = 'users_centros_responsavel';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'centro',
        'ano',
        'responsavel',
    ];
}
