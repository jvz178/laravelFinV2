<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    // use HasFactory;
    protected $table = 'ciclos';

    protected $fillable = [
        'nombre','img',
   ];
}
