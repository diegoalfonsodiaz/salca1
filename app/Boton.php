<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boton extends Model
{
    protected $table='tbl_boton';
    protected $primaryKey='idBoton';
    public $timestamps=false;
    protected $fillable=[
        'zonaBoton',
        'descripcionBoton',
        'estadoBoton'
    ];
    protected $guarded=[
        
    ];
}
