@extends('layouts.layoutReserva')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
			<div class="card bg-warning px-5">
				<p class="h1 text-center">MOSTRAR RESERVA</p>
				PROFESOR ID: {{ $reserva->profesor_Id }}<br><br>
				AULA ID: {{ $reserva->aula_Id }}<br><br>
				FECHA: {{ $reserva->fecha }}<br><br>
				HORA: {{ $reserva->hora }}<br><br>
                OBSERVACIONES: {{ $reserva->observaciones }}
			</div>
			<button onclick="location.href='{{ url('reserva')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection