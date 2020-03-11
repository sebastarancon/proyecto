@extends('layouts.layoutMateria')

@section('contenido')

	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				<h1>NUEVA MATERIA</h1>
				<form action="{{ url('materia') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
										
					<div class="form-group">
						NOMBRE
						<input type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						DEPARTAMENTO
						<input type="text" class="form-control" name="departamento">
					</div>					
					<div class="form-group">
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones">
					</div>					
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection