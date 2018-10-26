<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    protected $table='tbl_radio';
    protected $primaryKey='idRadio';
    public $timestamps=false;
    protected $fillable=[
        'descripcionRadio',
        'claveRadio',
        'estadoRadio',
        'idPersona'
    ];
    protected $guarded=[
        
    ];
}
