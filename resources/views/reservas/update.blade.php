@extends('layouts.layoutReserva')

@section('contenido')

	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				<h1>ACTUALIZAR RESERVA</h1>
				<form action="{{ url('reserva').'/'.$reserva->id }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					
					<div class="form-group">
						PROFESOR ID
						<input type="text" class="form-control" name="profesor_Id" value="{{$reserva->profesor_Id}}">
					</div>
					<div class="form-group">
						AULA ID
						<input type="text" class="form-control" name="aula_Id" value="{{$reserva->aula_Id}}">
					</div>
					<div class="form-group">
						FECHA
						<input type="text" class="form-control" name="fecha" value="{{$reserva->fecha}}">
					</div>
					<div class="form-group">
						HORA
						<input type="text" class="form-control" name="hora" value="{{$reserva->hora}}">
					</div>
					<div class="form-group">
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones" value="{{$reserva->observaciones}}">
					</div>					
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection