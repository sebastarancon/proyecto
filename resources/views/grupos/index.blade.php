@extends('layouts.layoutGrupo')

@section('contenido')
	
	<div class="container bg-info py-3">
		<p class="h1 text-center text-white font-weight-bold">Visualizacion listado de grupos</h1>

		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<div class="card bg-dark px-5 ">
					<?php
						foreach ($grupos as $grupo) {
							echo '&nbsp&nbsp'.$grupo->nombre . '&nbsp&nbsp';
							echo $grupo->nombreTutor . '<br>';
							echo '&nbsp&nbsp<a href="grupo/'.$grupo->id.'" class="btn btn-primary btn-sm">VISUALIZAR</a>&nbsp&nbsp';
							echo '<a href="grupo/'.$grupo->id.'/edit" class="btn btn-warning btn-sm">ACTUALIZAR</a>&nbsp&nbsp';
							echo '<form action="grupo/'.$grupo->id.'" method="POST">';
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
	</div>
@endsection