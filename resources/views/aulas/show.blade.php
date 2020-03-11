@extends('layouts.layoutAula')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center font-weight-bold">
			<div class="card bg-warning px-5" >
				<p class="h1 text-center">MOSTRAR AULA</p>
					NOMBRE: {{ $aula->nombre }}<br><br>
					DESCRIPCIÓN: {{ $aula->descripcion }}<br><br>
					NÚMERO: {{ $aula->numero }}<br><br>
					RESERVABLE: {{ $aula->reservable }}
			</div>
			<button onclick="location.href='{{ url('aula')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection