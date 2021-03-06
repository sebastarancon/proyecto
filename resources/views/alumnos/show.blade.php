@extends('layouts.layoutAlumno')

@section('contenido')
	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center font-weight-bold">
			<div class="card bg-warning px-5" >
				<p class="h1 text-center">MOSTRAR ALUMNO</p>
				<img src="{{asset("storage/$alumno->imagen") }}" alt="No disponible" class="card-img-top" style="width: 15rem; margin: auto;"><br>
					NOMBRE: {{ $alumno->nombre }}<br><br>
					APELLIDOS: {{ $alumno->apellidos }}<br><br>
					FECHA NACIMIENTO: {{ $alumno->fechaNac }}<br><br>
					GRUPO ID: {{ $alumno->grupo_Id }}<br><br>
					TELEFONO1: {{ $alumno->telefono1 }}<br><br>
					TELEFONO2: {{ $alumno->telefono2 }}<br><br>
					NOMBRE PADRE: {{ $alumno->nombrePadre }}<br><br>
					NOMBRE MADRE: {{ $alumno->nombreMadre }}<br><br> 
			</div>
			<button onclick="location.href='{{ url('alumno')}}'" class="btn btn-primary btn-lg my-1">Volver</button>
		</div>
	</div>
@endsection