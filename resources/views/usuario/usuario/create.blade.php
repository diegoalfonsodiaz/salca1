@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Nuevo Usuario</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
        {!! Form::open(array('url'=>'usuario/usuario', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
<div class="row">
<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group" style="display:inline-block;max-width:90%;">
            <label>Persona</label>
            <select name="idPersona" class="form-control" style="width:100%">
            @foreach($personas as $per)
                <option value="{{$per->idPersona}}" class="form-control" >{{$per->nombrePersona}}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group" style="display:inline-block;max-width:90%;">
            <label>Rol</label>
            <select name="idRol" class="form-control" style="width:100%">
            @foreach($roles as $rol)
                <option value="{{$rol->idRol}}" class="form-control" >{{$rol->nombreRol}}</option>
            @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Usuario</label>
            <input type="text" name="usuario" class="form-control" placeholder="User">
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Contraseña</label>
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
</div>
        {{Form::close()}}
@stop