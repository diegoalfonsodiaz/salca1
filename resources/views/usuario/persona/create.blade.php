@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Nueva Emergencia</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::open(array('url'=>'usuario/persona', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre Persona</label>
            <input type="text" name="nombrePersona" class="form-control" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion Persona</label>
            <input type="text" name="direccionPersona" class="form-control" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <label for="nombre">Telefono Persona</label>
            <input type="text" name="telefonoPersona" class="form-control" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <label for="nombre">Email Persona</label>
            <input type="text" name="emailPersona" class="form-control" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <label for="nombre">DPI Persona</label>
            <input type="text" name="dpiPersona" class="form-control" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop