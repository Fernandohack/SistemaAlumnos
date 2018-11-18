
@extends('adminlte::page')

@section('content_header')
	<h1 align="center">Gestion de Analisis</h1>
@stop

@section('content')
    
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header bg-info with-border">
	          	
	          	<h3 class="box-title pull-left">Listado</h3>
	        
	          	<div class="box-tools pull-right" >
	                
	             	<a href="{{route('persona.create')}}" class="btn btn-primary btn-sm" title="Crear nuevo parametro">Nuevo</a>
	                
	          	</div>
	          	
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
              	<thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Nombre</th>
	                  <th>Telefono</th>
	                  <th>CI</th>
	                  <th colspan="3">&nbsp;</th>
	                </tr>
	            </thead>
	            <tbody>

	            	@foreach($personas as $persona)
						<tr  role="row" class="odd" >
							<td >{{ $persona->id }}</td>
							
							<td >{{ $persona->nombre  }}</td>

							<td>{{ $persona->telefono }}</td>

							<td>{{ $persona->ci }}</td>
							
							<td width="5px">
								<a href="{{route('persona.show',$persona->id)}}" 
									class="btn btn-sm btn-success" title="Ver"><i class="fas fa-eye"></i></a>
							</td>
							
							<td width="5px">
								<a href="{{route('persona.edit',$persona->id)}}" 
									class="btn btn-sm btn-warning" title="Editar"><i class="fas fa-edit"></i></a>
							</td>
							<td width="5px">
								 {!! Form::open(['route' => ['persona.destroy', $persona->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" title="Borrar">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>                           
                                 {!! Form::close() !!}
							</td>
						</tr>
					@endforeach
                </tbody>
              </table>
              {{$personas->render()}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

@stop
