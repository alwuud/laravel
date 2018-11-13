<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  </style>
</head>
<body>

<div class="bg-1">
  <div class="container text-center">
    <h3>Autos de Guatemala</h3>
    <img src="https://smgmedia.blob.core.windows.net/images/114819/1024/vw-beetle-convertible-petrol_35840582.jpg" class="img-circle" alt="Bird" width="350" height="350">
    <h3>Aqui tenemos un auto para ti</h3>
    <h3> <a href="{{route('autos')}}">Ver autos</a> </h3>
    <h3> <a href="{{route('registrarautoview')}}">Nuevo Auto</a> </h3>
  </div>
</div>

</body>
</html>
