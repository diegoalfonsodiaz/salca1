@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Bitacora: {{$bitacora->tituloBitacora}}</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($bitacora, ['method'=>'PATCH', 'route'=>['bitacora.update', $bitacora->idBitacora]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Titulo Bitacora</label>
            <input type="text" name="tituloBitacora" class="form-control" value="{{$bitacora->tituloBitacora}}" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Descripcion Bitacora</label>
            <textarea name="descripcionBitacora" class="form-control" cols="30" rows="10">{{$bitacora->descripcionBitacora}}</textarea>
        </div>
        <div class="form-group">
        <label>Persona</label>
            <select name="idPersona" class="form-control">
            @foreach($personas as $per)
                @if($per->idPersona==$bitacora->idBitacora)
                <option value="{{$per->idPersona}}" class="form-control" selected >{{$per->nombrePersona}}</option>
                @else
                <option value="{{$per->idPersona}}" class="form-control">{{$per->nombrePersona}}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="form-group">
        <label>Emergencia</label>
            <select name="idEmergencia" class="form-control">
            @foreach($emergencias as $em)
                @if($em->idEmergencia==$bitacora->idBitacora)
                <option value="{{$em->idEmergencia}}" class="form-control" selected >{{$em->nombreEmergencia}}</option>
                @else
                <option value="{{$em->idEmergencia}}" class="form-control">{{$em->nombreEmergencia}}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop