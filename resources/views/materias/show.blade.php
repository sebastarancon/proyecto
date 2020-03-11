@extends('layouts.layoutMateria')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
			<div class="card bg-warning px-5">
				<p class="h1 text-center">MOSTRAR MATERIA</p>
				NOMBRE: {{ $materia->nombre }}<br><br>
				DEPARTAMENTO: {{ $materia->departamento }}<br><br>
				OBSERVACIONES: {{ $materia->observaciones }}<br><br>				
			</div>
			<button onclick="location.href='{{ url('materia')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection