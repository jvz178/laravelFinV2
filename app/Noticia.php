<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    // use HasFactory;
    protected $table = 'noticias';

    protected $fillable = [
        'titulo','imagen','descripcion','ciclo_id',
   ];
}
