<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $table='tbl_bitacora';
    protected $primaryKey='idBitacora';
    public $timestamps=false;
    protected $fillable=[
        'tituloBitacora',
        'descripcionBitacora',
        'fechaBitacora',
        'idEmergencia',
        'idPersona'
    ];
    protected $guarded=[
        
    ];
}
