@extends('layouts.layoutAusencia')

@section('contenido')
		

<p class="h1 text-center text-dark font-weight-bold"><u>Listado de ausencias</u></h1>
<div class="row justify-content-md-center">				
	<div class="col-12 col-md-7 text-center text-white font-weight-bold">
		<div class="row ">
			<div class="col-2">
				<button onclick="location.href='{{ url('ausencia/create')}}'" class="btn btn-primary btn-lg my-1 font-weight-bold">Nueva ausencia</button>

				<nav class="nav justify-content-center d-flex flex-column">
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="profesor">Profesores</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="grupo">Grupos</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="alumno">Alumnos</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="reserva">Reservas</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="ausencia">Ausencias</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="aula">Aulas</a>
					<a class="nav-link text-white bg-primary my-2 rounded p-2" href="materia">Materias</a>
				</nav>
			</div>
			<div class="col-10">
				<div class="card bg-warning px-5 ">				
					<?php
						foreach ($ausencias as $ausencia) {
							echo "<h3 class='text-dark'>Fecha: $ausencia->fecha</h3>";
                            echo "<h3 class='text-dark'>Hora: $ausencia->hora</h3>";			
							echo '<nav class="nav justify-content-center d-flex flex-row p-3">';
							echo '<a href="ausencia/'.$ausencia->id.'" class="btn btn-primary btn-sm ext">VISUALIZAR</a>';
							echo '<a href="ausencia/'.$ausencia->id.'/edit" class="btn btn-primary btn-sm text-white ext">ACTUALIZAR</a>';
							echo '<form action="ausencia/'.$ausencia->id.'" method="POST">';
					?>
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
					<?php
							echo '<input type="submit" value="ELIMINAR" class="btn btn-primary btn-sm my-1 ext">';
							echo '</form>';							
							echo '</nav>';
						}
					?>					
				</div>
			</div>					
		</div>	
	</div>
</div>
@endsection