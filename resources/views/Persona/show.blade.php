@extends('adminlte::page')

@section('content_header')
    <h1 align="center">Persona</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ver Persona
                    </div>

                    <div class="panel-body">
                        <p><strong>ID</strong> {{ $persona->id }}</p>
                        <p><strong>Nombre</strong> {{ $persona->nombre }}</p>
                        <p><strong>Telefono</strong> {{ $persona->telefono }}</p>
                        <p><strong>Ci</strong> {{ $persona->ci }}</p>
                        
                    </div>
                    <div class="form-group">
                        <a href="{{route('persona.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@stop





