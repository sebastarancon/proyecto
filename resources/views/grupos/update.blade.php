@extends('layouts.layoutGrupo')

@section('contenido')
<div class="container bg-warning py-3">
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left text-dark font-weight-bold">
			<h1>ACTUALIZAR GRUPO</h1>
			<form action="{{ url('grupo').'/'.$grupo->id }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				
				<div class="form-group">
					NOMBRE
					<input type="text" class="form-control" name="nombre" value="{{$grupo->nombre}}">
				</div>
				<div class="form-group">
					NOMBRE TUTOR
					<input type="text" class="form-control" name="nombreTutor" value="{{$grupo->nombreTutor}}">
				</div>
				<div class="form-group">
					CURSO
					<input type="text" class="form-control" name="curso" value="{{$grupo->curso}}">
				</div>
				<div class="form-group">
					DESCRIPCION
					<input type="text" class="form-control" name="descripcion" value="{{$grupo->descripcion}}">
				</div>
				
				<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
			</form>
		</div>
	</div>
</div>
@endsection