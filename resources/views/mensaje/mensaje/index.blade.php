@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Mensajes <a href="mensaje/create"><button class="btn btn-success">Redactar</button></a></h3>
        @include('mensaje.mensaje.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Texto</th>
                    <th>Fecha</th>
                    <th>Nombre Persona</th>
                    <th>Zona</th>
                </thead>
                @foreach($mensajes as $men)
                <tr>
                    <td>{{$men->idMensaje}}</td>
                    <td>{{$men->tituloMensaje}}</td>
                    <td>{{$men->textoMensaje}}</td>
                    <td>{{$men->fechaMensaje}}</td>
                    <td>{{$men->emisorMensaje}}</td>
                    <td>{{$men->zonaBoton}}</td>
                </tr>    
                @endforeach
            </table>
        </div>
        {{$mensajes->render()}}
    </div>
</div>
@endsection