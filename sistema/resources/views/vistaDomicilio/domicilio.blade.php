<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Domicilio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="row titulo">
        <h1 class="p-3 mb-2 bg-primary text-white"><center>REGISTRO DE DOMICILIO</center></h1>
    </div>
     
    <div class="row "id="entradas">
        <div class="col-1">
    </div>
     
<form action="{{ url('/vistaDomicilio')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group row">
<label for="Direccion" class="col-sm-2 col-form-label">Digite la direccion</label>
<input type="text" class="form-control" name="Direccion">
</div>

<br>

<div class="form-group">
<label for="Uso_inmuebles">Digite el uso de inmuebles</label>
<select name="Uso_inmuebles" id="" class="form-control">
<option value="1">Hogar</option>
<option value="2">Domicilio</option>
<option value="3">Alquiler</option>
</select>
<br>
</div>


<div class="form-group">
<label for="Tiempo">Digite el tiempo</label>
<input type="text" name="Tiempo" class="form-control">
<br>
</div>


<div class="form-group">
<label for="Recibos">Suba los archivo del recibo</label>
<input type="file" name="Recibos" class="form-control">
<br>
</div>


<div class="form-group">
<label for="telefono">Digite el telefono general</label>
<input type="text" name="telefono" class="form-control">
<br>
</div>


<div class="form-group">
<label for="celular">Digite celular personal</label>
<input type="text" name="celular" class="form-control">
<br>
</div>


<div class="form-group">
<label for="extension">Digte la extencion de los numeros ingresados</label>
<input type="text" name="extension" class="form-control">
<br>
</div>
<p align="center">
<input type="submit" class="btn btn-primary btn-lg btn-block" value="GUARDAR">
</p>  
</form>

<p align="left">
<a href="{{url('Gestiones/create')}}" class="btn btn-primary btn-lg btn-block">Volver</a>
</p>

     <br>
    <footer class="p-3 mb-2 bg-primary text-white">
      <br>
      <center >Universidad De El Salvador.</center>
      <center>Facultad De Ingenieria y Arquitectura</center>
      <center>TECNOLOGIA ORIENTADA A OBJETOS</center>
      <br>
    </footer>
</body>
</html>