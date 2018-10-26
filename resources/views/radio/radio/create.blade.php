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
        {!! Form::open(array('url'=>'radio/radio', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Descripcion Radio</label>
            <input type="text" name="descripcionRadio" class="form-control" placeholder="Descripcion">
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Clave Radio</label>
            <input type="text" name="claveRadio" class="form-control" placeholder="Clave">
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
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
</div>
        {{Form::close()}}
@stop