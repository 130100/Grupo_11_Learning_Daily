<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Beneficiarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="row titulo">
        <h1 class="p-3 mb-2 bg-primary text-white"><center>DESIGNACION DE BENEFICIARIOS</center></h1>
    </div>
     
    <div class="row "id="entradas">
        <div class="col-1">
    </div>
     
<form action="{{url('/personas')}}" method="post" enctype="multipart/form-data">
@csrf




<h4> COMPLETE LA SIGUIENTE INFORMACION </h4>
<form>
<h5> PRIMER BENEFICIARIO: </h5>


<label for="Nombre"> Nombre: </label>
<input type="text" style="width: 350px;heigth:30 px" name="Nombre" id="Nombre"> <br>

</br>
<label for="Edad"> Edad: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Edad" id="Edad"> <br>

 </br>
 <label for="Parentesco"> Parentesco: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Parentesco" id="Parentesco"> <br>

 </br>
 <label for="Porcentaje"> Porcentaje: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Porcentaje" id="Porcentaje"> <br>

 </br>
 <label for="DUI"> DUI: </label>
 <input type="file" style="width: 350px;heigth:30 px" name="DUI" id="DUI"> <br>

<br>
<h5> SEGUNDO BENEFICIARIO: </h5>

<label for="Nombre1"> Nombre: </label>
<input type="text" style="width: 350px;heigth:30 px" name="Nombre1" id="Nombre1"> <br>

</br>
<label for="Edad1"> Edad: </label>
 <input type="text"style="width: 350px;heigth:30 px"  name="Edad1" id="Edad1"> <br>

 </br>
 <label for="Parentesco1"> Parentesco: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Parentesco1" id="Parentesco1"> <br>

 </br>
 <label for="Porcentaje1"> Porcentaje: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Porcentaje1" id="Porcentaje1"> <br>

 </br>
 <label for="DUI1"> DUI: </label>
 <input type="file"style="width: 350px;heigth:30 px"  name="DUI1" id="DUI1"> <br>


<br>
<h5> DATOS: </h5>

<label for="Fecha"> Fecha: </label>
<input type="date" style="width: 350px;heigth:30 px" name="Fecha" id= "Fecha"> <br>

</br>
 <label for="Lugar"> Lugar: </label>
 <input type="text" style="width: 350px;heigth:30 px" name="Lugar" id="Lugar"> <br>
 </br>
 <label for="Firma"> Firma y Sello: </label>
 <input type="file" style="width: 350px;heigth:30 px" name="Firma" id="Firma"> <br>
</br>

 </br>
 <input type="submit" value="Guardar Datos" class="btn btn-primary btn-lg btn-block"> 
 <br>   
</form>
<br>

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
