@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Bitacoras <a href="bitacora/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('bitacora.bitacora.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Nombre Persona</th>
                    <th>Nombre Emergencia</th>
                    <th>Opciones</th>
                </thead>
                @foreach($bitacoras as $bit)
                <tr>
                    <td>{{$bit->idBitacora}}</td>
                    <td>{{$bit->tituloBitacora}}</td>
                    <td>{{$bit->descripcionBitacora}}</td>
                    <td>{{$bit->fechaBitacora}}</td>
                    <td>{{$bit->nombrePersona}}</td>
                    <td>{{$bit->nombreEmergencia}}</td>
                    <td>
                        <a href="{{URL::action('BitacoraController@edit', $bit->idBitacora)}}"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>    
                @endforeach
            </table>
        </div>
        {{$bitacoras->render()}}
    </div>
</div>
@endsection