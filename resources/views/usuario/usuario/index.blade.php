@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de usuarios <a href="usuario/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('usuario.usuario.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </thead>
                @foreach($usuarios as $us)
                <tr>
                    <td>{{$us->nombrePersona}}</td>
                    <td>{{$us->usuario}}</td>
                    <td>{{$us->nombreRol}}</td>
                    <td>
                        <a href="{{URL::action('UserController@edit', $us->id)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$us->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>    
                @include('usuario.usuario.modal')
                @endforeach
            </table>
        </div>
        {{$usuarios->render()}}
    </div>
</div>
@endsection