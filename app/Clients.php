<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];
}
