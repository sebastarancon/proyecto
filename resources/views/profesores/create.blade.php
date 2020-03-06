@extends('layouts.layoutProfesor')

@section('contenido')
	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				
				<h1>CREAR NUEVO PROFESOR</h1>
				<form action="{{ url('profesor') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						ID<input type="text" class="form-control" name="id">
					</div>
					<div class="form-group">
						NOMBRE<input type="text" class="form-control" name="nombre">
					</div>
					<div class="form-group">
						APELLIDOS<input type="text" class="form-control" name="apellidos">
					</div>
					<div class="form-group">
						DEPARTAMENTO<input type="text" class="form-control" name="departamento">
					</div>
					<div class="form-group">
						ESPECIALIDAD<input type="text" class="form-control" name="especialidad">
					</div>
					<div class="form-group">
						CARGO<input type="text" class="form-control" name="cargo">
					</div>
					<div class="form-group">
						OBSERVACIONES<input type="text" class="form-control" name="observaciones">
					</div>
					<div class="form-group">
						CODIGO<input type="text" class="form-control" name="codigo">
					</div>
					<div class="form-group">
						IMAGEN<input type="file" class="form-control" accept=".jpg, .jpeg, .png" name="imagen">
					</div>
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
					
				</form>
			</div>
		</div>
	</div>
@endsection