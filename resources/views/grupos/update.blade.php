@extends('layouts.layoutGrupo')

@section('contenido')	
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-left text-white font-weight-bold">
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
				
				<button type="submit" class="btn btn-danger btn-lg">Aceptar</button>
				<button onclick="location.href='{{ url('grupo')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
			</form>
		</div>
	</div>
@endsection