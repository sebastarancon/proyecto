@extends('layouts.layoutReserva')

@section('contenido')

	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				<h1>NUEVA RESERVA</h1>
				<form action="{{ url('reserva') }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
										
					<div class="form-group">
						PROFESOR ID
						<input type="text" class="form-control" name="profesor_Id">
					</div>
					<div class="form-group">
						AULA ID
						<input type="text" class="form-control" name="aula_Id">
					</div>
					<div class="form-group">
						FECHA
						<input type="text" class="form-control" name="fecha">
					</div>
					<div class="form-group">
						HORA
						<input type="text" class="form-control" name="hora">
					</div>
					<div class="form-group">
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones">
					</div>					
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection