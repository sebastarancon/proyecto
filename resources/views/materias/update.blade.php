@extends('layouts.layoutMateria')

@section('contenido')

	<div class="container bg-warning py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
				<h1>NUEVA MATERIA</h1>
				<form action="{{ url('materia').'/'.$materia->id }}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
                    {{ method_field('PUT') }}
										
					<div class="form-group">
						NOMBRE
						<input type="text" class="form-control" name="nombre" value="{{$materia->nombre}}">
					</div>
					<div class="form-group">
						DEPARTAMENTO
						<input type="text" class="form-control" name="departamento" value="{{$materia->departamento}}">
					</div>					
					<div class="form-group">
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones" value="{{$materia->observaciones}}">
					</div>					
					<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection