<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Menu de Inicio</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   </head>

   <body>
      <header>
         <nav class="navbar bg-primary">
             <div class="container-fluid">
                 <a class="navbar-brand text-white" href="#">
                     <img src="./images/ues.jpg" alt="Logo" width="28" height="32" class="d-inline-block align-text-top">                
                     Sistema de Gestión de Asociados
                 </a>                
             </div>
         </nav>
     </header>
 
    <br> <br>
    <div class="container py-4">
     <div class="card mb-3" >
      <div class="row ">      <div class="col-3"></div>
          <div class="col-md-2">
              <img src="./images/logo.png" alt="" width="240" height="240">
          </div>
          <div class="col-md-3">
              <div class="card-body">
                  <h3 class="card-title">Bienvenidos/as</h3>
                  <p class="card-text">Sistema de gestión de asociados</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
          </div>
      </div>
  </div>
</div>
   
      <div id="contact" class="contact">
                  <form class="main_form ">
                     <div class="row">
                        <div class="col-1"></div>
                        <div class="col-2">
                          <a href="{{url('Gestiones/create')}}" class="btn btn-dark ">Registrar Asociado</a>
                        </div>
                        <div class="col-2">
                           <a href="{{url('Complementos')}}" class="btn btn-dark ">Observar la lista de registrados</a>
                        </div>
                        <div class="col-2">
                         <a href="{{url('Gestiones/')}}" class="btn btn-dark ">Verificar Reporte</a>
                        </div>
                       
                     </div>
                  </form>
      </div>

      <footer>
         <div class="footer">
            
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Universidad De El Salvador.</p>
                        <p>Facultad De Ingenieria y Arquitectura</p>
                        <p>Tegnologia orientada a Objetos</p>
                        <p>T&copy; 2022 - GRUPO 11</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>