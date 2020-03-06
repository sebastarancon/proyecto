@extends('layouts.layoutProfesor')

@section('contenido')

	<div class="full-container bg-light py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
				<div class="card bg-warning py-2">
					<p class="h1 ">MOSTRAR PROFESOR</p>
					<img src="{{asset("storage/$profesor->imagen") }}" alt="No disponible" class="card-img-top" style="width: 15rem; margin: auto;">
						NOMBRE: {{ $profesor->nombre }}<br><br>
						APELLIDOS: {{ $profesor->apellidos }}<br><br>
						DEPARTAMENTO: {{ $profesor->departamento }}<br><br>
						ESPECIALIDAD: {{ $profesor->especialidad }}<br><br>
						CARGO: {{ $profesor->cargo }}<br><br>
						OBSERVACIONES: {{ $profesor->observaciones }}<br><br>
						CODIGO: {{ $profesor->codigo }}<br><br>
				</div>
				<button onclick="location.href='{{ url('profesor')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
			</div>
		</div>
	</div>
@endsection