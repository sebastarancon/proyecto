<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Profesores</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

	@if(Session::has('notice'))
		{{Session::get('notice')}}
	@endif

	@if(Session::has('error'))
		{{Session::get('error')}}
	@endif
	
	<div class="container bg-info py-3">
		<p class="h1 text-center text-white font-weight-bold">Visualizacion listado de profesores</h1>

		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<div class="card bg-dark px-5 ">
					<?php
						foreach ($profesores as $profesor) {
							echo '&nbsp&nbsp'.$profesor->nombre.'&nbsp&nbsp';
							echo $profesor->apellidos . '<br>';
							echo '&nbsp&nbsp<a href="profesor/'.$profesor->id.'" class="btn btn-primary btn-sm">VISUALIZAR</a>&nbsp&nbsp';
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
	</div>
</body>
</html>