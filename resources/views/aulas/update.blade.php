@extends('layouts.layoutAula')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left font-weight-bold">
			
			<h1>ACTUALIZAR AULA</h1>
			<form action="{{ url('aula').'/'.$aula->id }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}
                {{ method_field('PUT') }}

				<div class="form-group">
					NOMBRE<input type="text" class="form-control" name="nombre" value="{{$aula->nombre}}">
				</div>
				<div class="form-group">
					DESCRIPCIÓN<input type="text" class="form-control" name="descripcion" value="{{$aula->descripcion}}">
				</div>
				<div class="form-group">
					NÚMERO<input type="text" class="form-control" name="numero" value="{{$aula->numero}}">
				</div>
				<div class="form-group">
					RESERVABLE<input type="text" class="form-control" name="reservable" value="{{$aula->reservable}}">
				</div>

				<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				
			</form>
		</div>
	</div>
</div>
@endsection