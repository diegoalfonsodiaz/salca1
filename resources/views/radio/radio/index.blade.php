@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de personas <a href="radio/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('radio.radio.search')
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
                    <th>Clave</th>
                    <th>Opciones</th>
                </thead>
                @foreach($radios as $rad)
                <tr>
                    <td>{{$rad->idRadio}}</td>
                    <td>{{$rad->nombrePersona}}</td>
                    <td>{{$rad->descripcionRadio}}</td>
                    <td>{{$rad->claveRadio}}</td>
                    <td>
                        <a href="{{URL::action('RadioController@edit', $rad->idRadio)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$rad->idRadio}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>    
                @include('radio.radio.modal')
                @endforeach
            </table>
        </div>
        {{$radios->render()}}
    </div>
</div>
@endsection