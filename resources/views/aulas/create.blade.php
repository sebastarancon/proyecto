@extends('layouts.layoutAula')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left font-weight-bold">
			
			<h1>CREAR NUEVO AULA</h1>
			<form action="{{ url('aula') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					NOMBRE<input type="text" class="form-control" name="nombre">
				</div>
				<div class="form-group">
					DESCRIPCIÓN<input type="text" class="form-control" name="descripcion">
				</div>
				<div class="form-group">
					NÚMERO<input type="text" class="form-control" name="numero">
				</div>
				<div class="form-group">
					RESERVABLE<input type="text" class="form-control" name="reservable">
				</div>

				<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				
			</form>
		</div>
	</div>
</div>
@endsection