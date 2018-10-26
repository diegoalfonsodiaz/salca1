<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emergencia extends Model
{
    protected $table='tbl_emergencia';
    protected $primaryKey='idEmergencia';
    public $timestamps=false;
    protected $fillable=[
        'nombreEmergencia',
        'descripcionEmergencia',
        'condicion'
    ];
    protected $guarded=[
        
    ];
}
