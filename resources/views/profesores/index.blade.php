@extends('layouts.layoutProfesor')

@section('contenido')
		<nav class="nav justify-content-center bg-dark">
			<a class="nav-link text-white bg-success mx-2" href="profesor">Profesores</a>
			<a class="nav-link text-white bg-success mx-2" href="grupo">Grupos</a>
			<a class="nav-link text-white bg-success mx-2" href="alumno">Alumnos</a>
		</nav>

		<p class="h1 text-center text-white font-weight-bold">Visualizacion listado de profesores</h1>
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<div class="card bg-dark px-5 ">
					<?php
						foreach ($profesores as $profesor) {
							echo '&nbsp&nbsp'.$profesor->nombre.'&nbsp&nbsp';
							echo $profesor->apellidos . '<br>';
							echo '&nbsp&nbsp<a href="profesor/'.$profesor->id.'" class="btn btn-primary btn-sm">VISUALIZAR</a>&nbsp&nbsp';
							//echo '&nbsp&nbsp<input type="button" onclick="location.href="profesor/$profesor->id";" value="VISUALIZAR" class="btn btn-primary btn-sm">&nbsp&nbsp';
							echo '<a href="profesor/'.$profesor->id.'/edit" class="btn btn-warning btn-sm">ACTUALIZAR</a>&nbsp&nbsp';
							echo '<form action="profesor/'.$profesor->id.'" method="POST">';
					?>
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
					<?php
							echo '&nbsp&nbsp<input type="submit" value="ELIMINAR" class="btn btn-danger btn-sm my-1">';
							echo '</form><hr>';
							echo '<br>';
						}
					?>
				</div>
			</div>
		</div>
@endsection