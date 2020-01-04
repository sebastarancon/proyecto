<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos Grupo</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container bg-info py-3">
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
				</form>
			</div>
		</div>
	</div>
</body>
</html>