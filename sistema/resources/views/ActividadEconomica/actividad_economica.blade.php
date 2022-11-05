<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//ES">
<html>
<head>
<!-- ENCABEZADO DE LA PAGINA WEB -->
<TITLE> Actividad Economica </TITLE>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=ISO-8859-1">
<META HTTP-EQUIV="Expires" CONTENT="0">
<META NAME="author" CONTENT="oscar rene vasquez avalos">
<META NAME="keywords" CONTENT="Tegnologia Orientada a Objetos">
<META NAME="description" CONTENT="Actividad Economica">
    
    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tablas.css">
	
</head>
<body TEXT="#000000" 	LINK="##000800" 
VLINK="#ff2a00" ALINK="#33CC00">

<div class="row titulo">
        <h1 class="p-3 mb-2 bg-primary text-white"><center>REGISTRO DE ACTIVIDAD ECONOMICA</center></h1>
    </div>
    <!-- ENCABEZADO DE LA PAGINA WEB -->
    <br><br>
    <div class="container-fluid " >
        <div class="row justify-content-md-center ">
        <!--Formulario de catalogo de cuentas-->
        <div class="col-sm-12 col-md-8">
        <div class="card outline-black">
        <div class="card-header ">
        <h3 class="text-center">Actividad Economica</h3>
        </div>
        <div class="card-body ">
        <form action="{{ url('ActividadEconomica') }}" method="post" enctype="multipart/form-data">
          @csrf
          
            <div class="text-muted">
                Complete la siguiente informacion:
              </div><br>
        <div class="col"> 
            <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Es empleado o empresario: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="EsEmpleado" id="EsEmpleado" value="Si">
                        <label class="form-check-label" for="inlineRadio1">Si</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="EsEmpleado" id="EsEmpleado" value="No">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                      </div>
                </div>
              </div>       
            <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Capacidad de pago: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="pago" class="form-control" name="CapacidadPago" id="CapacidadPago" placeholder="$ 00.00">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-4 col-form-label">A que se dedica: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <select class="custom-select" name="Dedicacion" id="Dedicacion">
                        <option selected>Seleccione</option>
                        <option value="Constructor/ra">Constructor/ra</option>
                        <option value="Cocinero/a">Cocinero/a</option>
                        <option value="Abogado/a">Abogado/a</option>
                        <option value="Policia">Policia</option>
                        <option value="Profesor/a">Profesor/a</option>
                        <option value="Ingeniero/a">Ingeniero/a</option>
                        <option value="Licenciado/a">Licenciado/a</option>
                        <option value="Enfermero/a">Enfermero/a</option>
                        <option value="Administrador/a">Administrador/a</option>
                      </select>
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Lugar del negocio: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="negocio" class="form-control" name="LugarNegocio" id="LugarNegocio" placeholder="Nombre del negocio">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Ahorro Mensual: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="ahorro" class="form-control" name="AhorroMensual" id="AhorroMensual" placeholder="$ 00.00">
                </div>
              </div>
        </div>
        
        <div class="card-footer">       
        <p align="center">
        <input type="submit" class="btn btn-primary btn-lg " value="GUARDAR">
        </p>  
        </div> 
        </form>
        
        </div>
        </div>
        </div>
        </div>
        </div>
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