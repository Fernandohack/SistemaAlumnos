	

<div class="form-group">
    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}
</div>
<div class="form-group">
    {{ Form::label('ci', 'CI') }}
    {{ Form::text('ci', null, ['class' => 'form-control', 'id' => 'ci']) }}
</div>

<div class="form-group">
	<a href="{{route('persona.index')}}" class="btn btn-sm btn-primary btn-warning">Volver</a>
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}

</div>
