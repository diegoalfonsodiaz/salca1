@extends('layouts.admin')
@section('contenido')

<!DOCTYPE html>
<br>
    <html>
    <style type="text/css">
  .encendido{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 35px;
    color: #ffffff;
    background-color: #28b463;
    border-radius: 6px;
    border: 2px solid #28b463;
    width: 100%;
    min-width: 50px;
    max-width: 300px;
    font-family: Arial;
    align-items: center;
    position: relative;
    text-align: center;
    display: inline-block;
  }
  
    .apagado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 35px;
    color: #ffffff;
    background-color:  #cb4335;
    border-radius: 6px;
    border: 2px solid  #cb4335 ;
    width: 100%;
    min-width: 50px;
    max-width: 300px;
    font-family: Arial;
    align-items: center;
    position: relative;
    text-align: center;
    display: inline-block;
  }
  th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: center;
    font-family: Arial;
    font-size: 25px;
}

</style>
        <br>
            <div class="row">
                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                    <h3>Listado de botones</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <table style="width:25%">
                                <thead>
                                    <th>Zona 1</th>
                                </thead>
                                <tr>
                                    <td>
                                        <form name="form1" action="{{url('boton/boton')}}" method="POST">
                                        {{ csrf_field() }}
                                            <input class="encendido" type="submit" name="ON1" id="ON1" value="Encendido" onClick='alert("Alarma Encendida")'>
                                            <input class="apagado" type="submit" name="OFF1" id="OFF1" value="Apagado" onClick='alert("Alarma Apagada")'>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table style="width:25%">
                                <thead>
                                    <th>Zona 2</th>
                                </thead>
                                <tr>
                                    <td>
                                        <form name="form1" action="{{url('boton/boton')}}" method="POST">
                                        {{ csrf_field() }}
                                            <input class="encendido" type="submit" name="ON2" id="ON2" value="Encendido" onClick='alert("Alarma Encendida")'>
                                            <input class="apagado" type="submit" name="OFF2" id="OFF2" value="Apagado" onClick='alert("Alarma Apagada")'>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table style="width:25%">
                                <thead>
                                    <th>Zona 3</th>
                                </thead>
                                <tr>
                                    <td>
                                        <form name="form1" action="{{url('boton/boton')}}" method="POST">
                                        {{ csrf_field() }}
                                            <input class="encendido" type="submit" name="ON3" id="ON3" value="Encendido" onClick='alert("Alarma Encendida")'>
                                            <input class="apagado" type="submit" name="OFF3" id="OFF3" value="Apagado" onClick='alert("Alarma Apagada")'>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table style="width:25%">
                                <thead>
                                    <th>Zona 4</th>
                                </thead>
                                <tr>
                                    <td>
                                        <form name="form1" action="{{url('boton/boton')}}" method="POST">
                                        {{ csrf_field() }}
                                            <input class="encendido" type="submit" name="ON4" id="ON4" value="Encendido" onClick='alert("Alarma Encendida")'>
                                            <input class="apagado" type="submit" name="OFF4" id="OFF4" value="Apagado" onClick='alert("Alarma Apagada")'>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                            <table style="width:25%">
                                <thead>
                                    <th>Zona 5</th>
                                </thead>
                                <tr>
                                    <td>
                                        <form name="form1" action="{{url('boton/boton')}}" method="POST">
                                        {{ csrf_field() }}
                                            <input class="encendido" type="submit" name="ON5" id="ON5" value="Encendido" onClick='alert("Alarma Encendida")'>
                                            <input class="apagado" type="submit" name="OFF5" id="OFF5" value="Apagado" onClick='alert("Alarma Apagada")'>
                                        </form>
                                    </td>
                                </tr>
                            </table>

                        </table>
                    </div>
                </div>
            </div>
        <br>
    <html>
<br>
@endsection