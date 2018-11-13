<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>


<div class="container">
	<br>
	<div class="container">
		<div class="text-right">
			<a href="{{route('home')}}" class="btn btn-info">Home</a>			
			<a href="{{route('registrarautoview')}}" class="btn btn-success">Registrar</a>			
		</div>
		
	</div>
	<div class="container">
		<h1 class="container text-center" style="font-family: Pacifico, cursive; font-size: 60px;">Autos registrados</h1>		
	</div>
	<div class="container">
		<table class="table table-bordered ">
			<thead>
				<tr class="text-center" style="background: #FFFFBB;">
					<td>
						<strong>Marca</strong>
					</td>
					<td>
						<strong>Línea</strong>
					</td>
					<td>
						<strong>Modelo</strong>
					</td>
					<td>
						<strong>Descripción</strong>
					</td>
					<td>
						<strong>Acción</strong>
					</td>
				</tr>
			</thead>
			<tbody>
				@foreach($autos as $auto)
					<tr class="text-center">
						<td>
							{{$auto->marca}}
						</td>
						<td>
							{{$auto->linea}}
						</td>
						<td>
							{{$auto->modelo}}
						</td>
						<td>
							{{$auto->descripcion}}
						</td>
						<td>
							<a href="{{route('eliminarauto',$auto->id)}}" class="btn btn-danger">Eliminar</a>
						</td>
					</tr>

				@endforeach
				
			</tbody>
			
		</table>
		
	</div>
	
</div>
	
</body>
</html>