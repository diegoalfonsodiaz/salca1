@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3>Editar Usuario: {{$usuario->usuario}}</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($usuario, ['method'=>'PATCH', 'route'=>['usuario.update', $usuario->id]])!!}
        {{Form::token()}}
        <div class="form-group">
        <label>Persona</label>
            <select name="idPersona" class="form-control">
            @foreach($personas as $per)
                @if($per->idPersona==$usuario->id)
                <option value="{{$per->idPersona}}" class="form-control" selected >{{$per->nombrePersona}}</option>
                @else
                <option value="{{$per->idPersona}}" class="form-control">{{$per->nombrePersona}}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="form-group">
        <label>Rol</label>
            <select name="idRol" class="form-control">
            @foreach($roles as $rol)
                @if($rol->idRol==$usuario->id)
                <option value="{{$rol->idRol}}" class="form-control" selected >{{$rol->nombreRol}}</option>
                @else
                <option value="{{$rol->idRol}}" class="form-control">{{$rol->nombreRol}}</option>
                @endif
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nombre">Usuario</label>
            <input type="text" name="usuario" class="form-control" value="{{$usuario->usuario}}" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Contraseña</label>
            <input type="password" name="password" class="form-control" value="{{$usuario->password}}" placeholder="Contraseña">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        {{Form::close()}}
    </div>
</div>
@stop