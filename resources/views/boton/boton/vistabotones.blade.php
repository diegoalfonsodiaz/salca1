@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de botones</h3>
    </div>
</div>
<div class="row">
<Form>
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
        <h3><a href="/mensaje/zona1"><button class="btn btn-success">zona 1 ON</button></a></h3>
        <button class="btn btn-danger">zona 1 OFF</button></a></h3>
        <br>
        <button class="btn btn-success">zona 2 ON</button></a></h3>
        <button class="btn btn-danger">zona 2 OFF</button></a></h3>
        <br>
        <button class="btn btn-success">zona 3 ON</button></a></h3>
        <button class="btn btn-danger">zona 3 OFF</button></a></h3>
        <br>
        <button class="btn btn-success">zona 4 ON</button></a></h3>
        <button class="btn btn-danger">zona 4 OFF</button></a></h3>
        <br>
        <button class="btn btn-success">zona 5 ON</button></a></h3>
        <button class="btn btn-danger">zona 5 OFF</button></a></h3>
        <br>
    </div>
</Form>

</div>
@endsection