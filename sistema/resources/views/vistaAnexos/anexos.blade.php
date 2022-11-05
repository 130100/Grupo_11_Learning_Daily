<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anexos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="row titulo">
        <h1 class="p-3 mb-2 bg-success text-white""><center>REGISTRO DE ANEXOS</center></h1>
    </div>
     
    <div class="row "id="entradas">
        <div class="col-1">
    </div>
     
<form action="{{ url('/vistaAnexos')}}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="Recibos">Suba los archivo correspondientes al dui</label>
<input type="file" name="Dui" class="form-control">
<br>
</div>

<br>

<div class="form-group">
<label for="Recibos">Suba los archivos correspondientes a la tarjeta ISSS</label>
<input type="file" name="tarjeta_isss" class="form-control">
<br>
</div>
<br>

<div class="form-group">
<label for="Recibos">Suba los archivos correspondientes a la tarjeta IVA</label>
<input type="file" name="tarjeta_iva" class="form-control">
<br>
</div>

<br>
<div class="form-group">
<label for="Recibos">Suba los archivo correspondientes a la constancia de salario</label>
<input type="file" name="constancia_salario" class="form-control">
<br>
</div>
<br>

<div class="form-group">
<label for="Recibos">Suba los archivos correspondientes al NIT </label>
<input type="file" name="nit" class="form-control">
<br>
</div>
<br>

<div class="form-group">
<label for="Recibos">Suba los archivos correspondientes al pasaporte</label>
<input type="file" name="pasapore" class="form-control">
<br>
</div>
<br>

<div class="form-group">
<label for="Recibos">Suba los archivos correpondientes a su fotocopia de titulo</label>
<input type="file" name="fotocopia_titulo" class="form-control">
<br>
</div>
<br>
<p align="center">
<input type="submit" class="btn btn-success btn-lg btn-block" value="GUARDAR">
</p>  
</form>
<br>
<p align="left">
<a href="{{url('Gestiones/create')}}" class="btn btn-success btn-lg btn-block">Volver</a>
</p>


     <br>
    <footer class="p-3 mb-2 bg-success text-white"">
      <br>
      <center >Universidad De El Salvador.</center>
      <center>Facultad De Ingenieria y Arquitectura</center>
      <center>TECNOLOGIA ORIENTADA A OBJETOS</center>
      <br>
    </footer>
</body>
</html>