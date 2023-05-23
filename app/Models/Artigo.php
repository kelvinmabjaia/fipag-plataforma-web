<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $table = 'Artigo';
    protected $primaryKey = 'Artigo';

    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
