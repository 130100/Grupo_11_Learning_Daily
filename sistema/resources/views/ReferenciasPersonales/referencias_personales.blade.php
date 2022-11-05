<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//ES">
<html>
<head>
<!-- ENCABEZADO DE LA PAGINA WEB -->
<TITLE> Referencias Personales </TITLE>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=ISO-8859-1">
<META HTTP-EQUIV="Expires" CONTENT="0">
<META NAME="author" CONTENT="oscar rene vasquez avalos">
<META NAME="keywords" CONTENT="Tegnologia Orientada a Objetos">
<META NAME="description" CONTENT="Referencias Personales">
    
    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/tablas.css">
	
</head>
<body TEXT="#000000" 	LINK="##000800" 
VLINK="#ff2a00" ALINK="#33CC00">
<div class="row titulo">
        <h1 class="p-3 mb-2 bg-primary text-white"><center>REGISTRO DE REFERENCIAS PERSONALES</center></h1>
    </div>
    <!-- ENCABEZADO DE LA PAGINA WEB -->
    <br><br>
    <div class="container-fluid " >
        <div class="row justify-content-md-center ">
        <!--Formulario de referencias personales-->
        <div class="col-sm-12 col-md-8">
        <div class="card outline-black">
        <div class="card-header ">
        <h3 class="text-center">Referencias Personales</h3>
        </div>
        <div class="card-body ">
        <form action="{{ url('ReferenciasPersonales') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="text-muted">
                Complete la siguiente informaci&oacuten:
              </div><br>
              <div class="text">
                Referencia Personal N&deg; 1
              </div><br>
        <div class="col">       
            <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Nombre Completo: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="NombreCompleto" id="NombreCompleto" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Telefono: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-4 col-form-label">Correo Electr&oacutenico: <span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="Correo" id="Correo" placeholder="">
                </div>
              </div> 
        </div>
        <div class="text">
            Referencia Personal N&deg; 2
          </div><br>
    <div class="col">       
        <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Nombre Completo: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="NombreCompleto" id="NombreCompleto"  placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Telefono: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Telefono" id="Telefono" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Correo Electr&oacutenico: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="Correo" id="Correo" placeholder="">
            </div>
          </div> 
    </div><br>
    <div class="text">
        Informaci&oacuten del Asociado:
      </div><br>
      <div class="col">   
      <div class="form-group row">
        <label  class="col-sm-4 col-form-label">Asociaci&oacuten a la que pertenece: <span class="text-danger">*</span></label>
        <div class="col-sm-8">
          <input type="negocio" class="form-control" name="Asociacion" id="Asociacion" placeholder="">
        </div>
      </div> 
      <div class="form-group row">
        <label  class="col-sm-4 col-form-label">Designar Beneficiarios: <span class="text-danger">*</span></label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="DesignarBeneficiarios" id="DesignarBeneficiarios" value="Si">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="DesignarBeneficiarios" id="DesignarBeneficiarios" value="No">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
        </div>
      </div> 
      </div>  <br>
      <div class="text">
       Datos del Ejecutivo:
      </div><br> 
      <div class="col">       
        <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Lugar: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
              <input type="pago" class="form-control" name="Lugar" id="Lugar" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Nombre del Ejecutivo: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <input type="pago" class="form-control" name="NombreEjecutivo" id="NombreEjecutivo" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-4 col-form-label">Fecha: <span class="text-danger">*</span></label>
            <div class="col-sm-8">
                <section class="container">
                 
                
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" name="Fecha" id="Fecha" class="form-control">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                   
                        
                </section>
                <script type="text/javascript">
                    $(function() {
                        $('#datepicker').datepicker();
                    });
                </script>
            
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