<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    // use HasFactory;
    protected $table = 'requisitos';

    protected $fillable = [
        'descripcion','oferta_id',
    ];
}
