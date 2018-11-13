<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<div class="container col-md-12">
		<br>
		<div class="container">
			<div class="text-right">
				<a href="{{route('home')}}" class="btn btn-info">Home</a>			
				<a href="{{route('registrarautoview')}}" class="btn btn-success">Registrar</a>			
			</div>
			
		</div>

		<div class="row">

		<div class="col-md-2">
		</div>

		<div class="col-md-8">
			<form class="form-control container form-group" style="background: #FFFAA2;" action="{{route('registrarauto')}}">
				<br>
				<br>
				<div class="row">
					<div class="container text-center">
						<label style="font-family: Pacifico; font-size: 40px;" class="text-center"><strong>Registro de Autos</strong></label>
					</div>					
				</div>
				<div class="row form-group">
					<label for="marca" class="col-md-3 text-md-right">Marca</label>					
					<input type="" name="marca" id="marca" class="col-md-5" required>
				</div>
				<div class="row form-group">
					<label for="linea" class="col-md-3 text-md-right">Linea</label>
					<input type="" name="linea" id="linea" class="col-md-5" required>
				</div>
				<div class="row form-group">
					<label for="modelo" class="col-md-3 text-md-right">Modelo</label>

					<select name="modelo" id="modelo" class="col-md-5" >
						@for($i=1950;$i<=2018;$i++)
							<option>{{$i}}</option>
						@endfor
					</select>				
				</div>
				<div class="row form-group">
					<label name="descripcion" for="descripcion" class="col-md-3 text-md-right">Descripción</label>
					<textarea name="descripcion" id="descripcion" class="col-md-5" required></textarea>					
				</div>
				<div class="row text-center">
					<div class="form-group text-center container">
						<button type="submit" class="btn btn-success text-center">Registrar Auto</button>
					</div>					
				</div>
			</form>
			</div>
			
			
		</div>

		<div class="col-md-2">
			
		</div>
		
		</div>
	</div>


	
</body>
</html>