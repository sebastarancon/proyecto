@extends('layouts.layoutReserva')

@section('contenido')	
	<p class="h1 text-center text-dark font-weight-bold"><u>Listado de reservas</u></h1>

	<div class="row justify-content-md-center">				
		<div class="col-12 col-md-7 text-center text-dark font-weight-bold">
			<div class="row">
				<div class="col-2">
					<button onclick="location.href='{{ url('reserva/create')}}'" class="btn btn-primary btn-lg my-1 font-weight-bold">Nueva reserva</button>

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
							foreach ($reservas as $reserva) {
                                echo "<h3 class='text-dark'>Profesor ID: $reserva->profesor_Id</h3>";
                                echo "<h3 class='text-dark'>Aula ID: $reserva->aula_Id</h3>";							
								echo '<nav class="nav justify-content-center d-flex flex-row p-3">';
								echo '<a href="reserva/'.$reserva->id.'" class="btn btn-primary btn-sm ext">VISUALIZAR</a>';
								echo '<a href="reserva/'.$reserva->id.'/edit" class="btn btn-primary btn-sm ext">ACTUALIZAR</a>';
								echo '<form action="reserva/'.$reserva->id.'" method="POST">';
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