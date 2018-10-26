@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Emergencia: {{$persona->nombrePersona}}</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($persona, ['method'=>'PATCH', 'route'=>['persona.update', $persona->idPersona]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre Persona</label>
            <input type="text" name="nombrePersona" class="form-control" value="{{$persona->nombrePersona}}" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion Persona</label>
            <input type="text" name="direccionPersona" class="form-control" value="{{$persona->direccionPersona}}" placeholder="Direccion">
        </div>
        <div class="form-group">
            <label for="nombre">Telefono Persona</label>
            <input type="text" name="telefonoPersona" class="form-control" value="{{$persona->telefonoPersona}}" placeholder="Telefono">
        </div>
        <div class="form-group">
            <label for="nombre">Email Persona</label>
            <input type="text" name="emailPersona" class="form-control" value="{{$persona->emailPersona}}" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="nombre">DPI Persona</label>
            <input type="text" name="dpiPersona" class="form-control" value="{{$persona->dpiPersona}}" placeholder="DPI">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop