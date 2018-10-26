@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de personas <a href="persona/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('usuario.persona.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>DPI</th>
                    <th>Opciones</th>
                </thead>
                @foreach($personas as $per)
                <tr>
                    <td>{{$per->idPersona}}</td>
                    <td>{{$per->nombrePersona}}</td>
                    <td>{{$per->emailPersona}}</td>
                    <td>{{$per->telefonoPersona}}</td>
                    <td>{{$per->direccionPersona}}</td>
                    <td>{{$per->dpiPersona}}</td>
                    <td>
                        <a href="{{URL::action('PersonaController@edit', $per->idPersona)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$per->idPersona}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>    
                @include('usuario.persona.modal')
                @endforeach
            </table>
        </div>
        {{$personas->render()}}
    </div>
</div>
@endsection