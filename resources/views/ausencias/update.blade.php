@extends('layouts.layoutAusencia')

@section('contenido')

	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				<h1>ACTUALIZAR AUSENCIA</h1>
				<form action="{{ url('ausencia').'/'.$ausencia->id }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					
					<div class="form-group">
						FECHA
						<input type="text" class="form-control" name="fecha" value="{{$ausencia->fecha}}">
					</div>
					<div class="form-group">
						HORA
						<input type="text" class="form-control" name="hora" value="{{$ausencia->hora}}">
					</div>
					<div class="form-group">
                        PROFESOR ID
						<input type="text" class="form-control" name="profesor_Id" value="{{$ausencia->profesor_Id}}">
					</div>
					<div class="form-group">
                        PROFESOR SUSTITUTO ID
						<input type="text" class="form-control" name="profesor_Sustituye_Id" value="{{$ausencia->profesor_Sustituye_Id}}">
					</div>
					<div class="form-group">
						OBSERVACIONES-1
						<input type="text" class="form-control" name="observaciones1" value="{{$ausencia->observaciones1}}">
					</div>
                    <div class="form-group">
						OBSERVACIONES-2
						<input type="text" class="form-control" name="observaciones2" value="{{$ausencia->observaciones2}}">
					</div>					
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection