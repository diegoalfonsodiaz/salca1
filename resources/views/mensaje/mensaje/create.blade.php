@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Nuevo Mensaje</h3>
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
        {!! Form::open(array('url'=>'mensaje/mensaje', 'method'=>'POST', 'autocomplete'=>'off'))!!}
        {{Form::token()}}
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Titulo Mensaje</label>
            <input type="text" name="tituloMensaje" class="form-control" placeholder="Titulo">
        </div>
    </div>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <div class="form-group">
            <label for="nombre">Texto Mensaje</label>
            <textarea name="textoMensaje" class="form-control" placeholder="Descripcion" cols="30" rows="10"></textarea>
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