<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table='tbl_mensaje';
    protected $primaryKey='idMensaje';
    public $timestamps=false;
    protected $fillable=[
        'tituloMensaje',
        'textoMensaje',
        'fechaMensaje',
        'idBoton',
        'idPersona'
    ];
    protected $guarded=[
        
    ];
}
