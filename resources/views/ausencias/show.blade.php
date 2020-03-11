@extends('layouts.layoutAusencia')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
			<div class="card bg-warning px-5">
				<p class="h1 text-center">MOSTRAR AUSENCIA</p>
				FECHA: {{ $ausencia->fecha }}<br><br>
				HORA: {{ $ausencia->hora }}<br><br>
                PROFESOR ID: {{ $ausencia->profesor_Id }}<br><br>
                PROFESOR SUSTITUTO ID: {{ $ausencia->profesor_Sustituye_Id }}<br><br>
                OBSERVACIONES-1: {{ $ausencia->observaciones1 }}<br><br>
                OBSERVACIONES-2: {{ $ausencia->observaciones2 }}
			</div>
			<button onclick="location.href='{{ url('ausencia')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection