<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='tbl_rol';
    protected $primaryKey='idRol';
    public $timestamps=false;
    protected $fillable=[
        'nombreRol',
        'descripcionRol',
        'estadoRol'
    ];
    protected $guarded=[
        
    ];
}
