@extends('layouts.layoutProfesor')

@section('contenido')

	<div class="container bg-info py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<div class="card bg-dark px-5">
					<p class="h1 text-center text-white font-weight-bold">MOSTRAR PROFESOR</p>					
						ID: {{ $profesor->id }}<br><br>
						NOMBRE: {{ $profesor->nombre }}<br><br>
						APELLIDOS: {{ $profesor->apellidos }}<br><br>
						DEPARTAMENTO: {{ $profesor->departamento }}<br><br>
						ESPECIALIDAD: {{ $profesor->especialidad }}<br><br>
						CARGO: {{ $profesor->cargo }}<br><br>
						OBSERVACIONES: {{ $profesor->observaciones }}<br><br>
						CODIGO: {{ $profesor->codigo }}<br><br>
				</div>
			</div>
		</div>
	</div>
@endsection