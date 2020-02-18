@extends('layouts.layoutGrupo')

@section('contenido')	
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left text-white font-weight-bold">
			
			<h1>CREAR NUEVO GRUPO</h1>
			<form action="{{ url('profesor') }}" method="POST"><!-- llamo al controlador 'grupo'-->
				{{ csrf_field() }}

				<div class="form-group">
					ID<input type="text" class="form-control" name="id">
				</div>
				<div class="form-group">
					NOMBRE<input type="text" class="form-control" name="nombre">
				</div>
				<div class="form-group">
					NOMBRE TUTOR<input type="text" class="form-control" name="nombreTutor">
				</div>
				<div class="form-group">
					CURSO<input type="text" class="form-control" name="curso">
				</div>
				<div class="form-group">
					DESCRIPCION<input type="text" class="form-control" name="descripcion">
				</div>
				
				<button type="submit" class="btn btn-danger btn-lg">Aceptar</button>
			</form>
		</div>
	</div>
	
@endsection