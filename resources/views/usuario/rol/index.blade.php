@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de roles</h3>
        @include('usuario.rol.search')
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                </thead>
                @foreach($roles as $rol)
                <tr>
                    <td>{{$rol->idRol}}</td>
                    <td>{{$rol->nombreRol}}</td>
                    <td>{{$rol->descripcionRol}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        {{$roles->render()}}
    </div>
</div>
@endsection