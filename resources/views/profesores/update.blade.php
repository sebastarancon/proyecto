@extends('layouts.layoutProfesor')

@section('contenido')

	<div class="container bg-info py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-white font-weight-bold">
				<h1>ACTUALIZAR PROFESOR</h1>
				<form action="{{ url('profesor').'/'.$profesor->id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					
					<div class="form-group">
						NOMBRE
						<input type="text" class="form-control" name="nombre" value="{{$profesor->nombre}}">
					</div>
					<div class="form-group">
						APELLIDOS
						<input type="text" class="form-control" name="apellidos" value="{{$profesor->apellidos}}">
					</div>
					<div class="form-group">
						DEPARTAMENTO
						<input type="text" class="form-control" name="departamento" value="{{$profesor->departamento}}">
					</div>
					<div class="form-group">
						ESPECIALIDAD
						<input type="text" class="form-control" name="especialidad" value="{{$profesor->especialidad}}">
					</div>
					<div class="form-group">
						CARGO
						<input type="text" class="form-control" name="cargo" value="{{$profesor->cargo}}">
					</div>
					<div class="form-group">	
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones" value="{{$profesor->observaciones}}">
					</div>
					<div class="form-group">
						CODIGO
						<input type="text" class="form-control" name="codigo" value="{{$profesor->codigo}}">
					</div>
					<button type="submit" class="btn btn-danger btn-lg">Aceptar</button>
					<button onclick="location.href='{{ url('profesor')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
				</form>
			</div>
		</div>
	</div>
@endsection