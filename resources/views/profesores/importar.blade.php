@extends('layouts.layoutProfesor')

@section('contenido')
	<div class="container bg-info py-3">
		<div class="row justify-content-md-center">				
			<div class="col-12 col-md-7 text-center text-white font-weight-bold">
				<form enctype="multipart/form-data" method="POST"  action="{{ url('importar_profesor2') }}">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="archivo">Agrega un fichero</label>
						<input type="file" class="form-control-file" id="archivo" name="archivo">
						<button type="submit" class="btn btn-danger btn-lg">Enviar</button>
					</div>		
				</form>
			</div>
		</div>
	</div>
@endsection