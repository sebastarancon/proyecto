@extends('layouts.layoutGrupo')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
			<div class="card bg-warning px-5">
				<p class="h1 text-center">MOSTRAR GRUPO</p>
				NOMBRE: {{ $grupo->nombre }}<br><br>
				NOMBRE TUTOR: {{ $grupo->nombreTutor }}<br><br>
				CURSO: {{ $grupo->curso }}<br><br>
				DESCRIPCION: {{ $grupo->descripcion }}
			</div>
			<button onclick="location.href='{{ url('grupo')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection