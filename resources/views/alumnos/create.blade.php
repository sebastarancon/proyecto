@extends('layouts.layoutAlumno')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left font-weight-bold">
			
			<h1>CREAR NUEVO ALUMNO</h1>
			<form action="{{ url('alumno') }}" method="POST" enctype="multipart/form-data">
				{{ csrf_field() }}

				<div class="form-group">
					NOMBRE<input type="text" class="form-control" name="nombre">
				</div>
				<div class="form-group">
					APELLIDOS<input type="text" class="form-control" name="apellidos">
				</div>
				<div class="form-group">
					FECHA NACIMIENTO<input type="text" class="form-control" name="fechaNac">
				</div>
				<div class="form-group">
					GRUPO ID<input type="text" class="form-control" name="grupo_Id">
				</div>
				<div class="form-group">
					TELEFONO1<input type="text" class="form-control" name="telefono1">
				</div>
				<div class="form-group">
					TELEFONO2<input type="text" class="form-control" name="telefono2">
				</div>
				<div class="form-group">
					NOMBRE PADRE<input type="text" class="form-control" name="nombrePadre">
				</div>
				<div class="form-group">
					NOMBRE MADRE<input type="text" class="form-control" name="nombreMadre">
				</div>
				<div class="form-group">
					OBSERVACIONES<input type="text" class="form-control" name="observaciones">
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