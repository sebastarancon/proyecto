@extends('layouts.layoutGrupo')

@section('contenido')
	
	<div class="container bg-info py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<div class="card bg-dark px-5">
					<p class="h1 text-center text-white font-weight-bold">MOSTRAR GRUPO</p>
			
					ID: {{ $grupo->id }}<br><br>
					NOMBRE: {{ $grupo->nombre }}<br><br>
					NOMBRE TUTOR: {{ $grupo->nombreTutor }}<br><br>
					CURSO: {{ $grupo->curso }}<br><br>
					DESCRIPCION: {{ $grupo->descripcion }}

				</div>
			</div>
		</div>
	</div>
@endsection