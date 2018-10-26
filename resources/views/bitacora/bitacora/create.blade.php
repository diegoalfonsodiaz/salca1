@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Nuevo Radio</h3>
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
        {!! Form::open(array('url'=>'bitacora/bitacora', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Titulo Bitacora</label>
            <input type="text" name="tituloBitacora" class="form-control" placeholder="Titulo">
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Clave Radio</label>
            <textarea name="descripcionBitacora" class="form-control" placeholder="Descripcion" cols="30" rows="10"></textarea>
        </div>
    </div>
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
            <label>Emergencia</label>
            <select name="idEmergencia" class="form-control" style="width:100%">
            @foreach($emergencias as $em)
                <option value="{{$em->idEmergencia}}" class="form-control" >{{$em->nombreEmergencia}}</option>
            @endforeach
            </select>
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