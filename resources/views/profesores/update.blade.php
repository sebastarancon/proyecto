<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos profesor</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container bg-info py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-left text-white font-weight-bold">
				<h1>ACTUALIZAR PROFESOR</h1>
				<form action="{{ url('profesor').'/'.$profesor->id }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					
					<div class="form-group">
						NOMBRE
						<input type="text" class="form-control" name="nombre" value="{{$profesor->nombre}}">
					</div>
					<div class="form-group">
						APELLIDOS
						<input type="text" class="form-control" name="apellidos" value="{{$profesor->apellidos}}">
					</div>
					<div class="form-group">
						DEPARTAMENTO
						<input type="text" class="form-control" name="departamento" value="{{$profesor->departamento}}">
					</div>
					<div class="form-group">
						ESPECIALIDAD
						<input type="text" class="form-control" name="especialidad" value="{{$profesor->especialidad}}">
					</div>
					<div class="form-group">
						CARGO
						<input type="text" class="form-control" name="cargo" value="{{$profesor->cargo}}">
					</div>
					<div class="form-group">	
						OBSERVACIONES
						<input type="text" class="form-control" name="observaciones" value="{{$profesor->observaciones}}">
					</div>
					<div class="form-group">
						CODIGO
						<input type="text" class="form-control" name="codigo" value="{{$profesor->codigo}}">
					</div>
					<button type="submit" class="btn btn-danger btn-lg">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>