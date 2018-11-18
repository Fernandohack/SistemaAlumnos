<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	//para datos masivos
    protected $fillable = [
        'nombre','telefono','ci'
    ];
    //conexion a la tabla
    protected $table ='personas';
}
