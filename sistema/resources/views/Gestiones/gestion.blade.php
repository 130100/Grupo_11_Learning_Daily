

<h1 class="p-3 mb-2 bg-primary text-white"><center>REGISTRO DE ASOCIADOS</center></h1>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<main class="container py-5">
    <div class="row ">
        <div class="row " id="entradas">
            <section class="card">
                <div class="card-body">
                    <form action="{{ url('/Gestiones') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset style="width:80%">
                            <legend>Datos Generales</legend>
                            
                            <label for="primernombre" class="col-sm-2 col-form-label">Primer nombre:</label>
                            <input type="text" name="primernombre" class="form-control">
                            <label for="segundonombre" class="col-sm-2 col-form-label">Segundo nombre:</label>
                            <input type="text" name="segundonombre" class="form-control">
                            <label for="tercernombre" class="col-sm-2 col-form-label">Tercer nombre:</label>
                            <input type="text" name="tercernombre" class="form-control">
                            <label for="primerapellido" class="col-sm-2 col-form-label">Primer Apellido :</label>
                            <input type="text" name="primerapellido" class="form-control">
                            <label for="segundoapellido" class="col-sm-2 col-form-label">Segundo Apellido:</label>
                            <input type="text" name="segundoapellido" class="form-control">
                            
                            <label for="Femenino" class="col-sm col-form-label">Femenino:</label>
                            <input type="radio" value="Femenino" name="genero" class="form-check-input">
                            <label for="Masculino" class="col-sm col-form-label">Masculino:</label>
                            <input type="radio" name="genero" value="Masculino" class="form-check-input">
                            <label for="LGTBQ+" class="col-sm col-form-label">LGTBQ+:</label>
                            <input type="radio" name="genero" value="LGTBQ+" class="form-check-input">
                            <label for="No Binario" class="col-sm col-form-label">No Binario:</label>
                            <input type="radio" value="No Binario" name="genero" class="form-check-input">
                        </fieldset>
                    
                </div>
            </section>
        </div>
    </div>
    <br>
    <div class="row ">
        <div class="row " id="entradas">
            <section class="card">
                <div class="card-body">
                        <fieldset style="width:80%">
                            <legend>Documentos de Identidad </legend>
                            <label  class="col-sm-4 col-form-label">Tipo de documentos de
                                Identidad:</label>
                            <select  name="tipodoc" class="form-select">
                                <option value="dui" name="dui" class="form-control">DUI</option>
                                <option value="nup" name="nup" class="form-control">NUP</option>
                                <option value="nit" name="nit" class="form-control">NIT</option>
                            </select>
                            <label for="dui" class="col-sm-2 col-form-label">DUI:</label>
                            <input type="text" name="dui" class="form-control">
                            <label for="nup" class="col-sm-2 col-form-label">NUP:</label>
                            <input type="text" name="nup" class="form-control">
                            <label for="date" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                            <input type="date" name="fechadenacimiento" class="form-control">
                            <label for="" class="col-sm-2 col-form-label">Nacionalidad:</label>
                            <input type="text" name="nacionalidad" class="form-control">
                        </fieldset>
                    
                </div>
            </section>
        </div>
    </div>
    <br>
    <div class="row ">
        <div class="row " id="entradas">
            <section class="card">
                <div class="card-body">
                    
                        <fieldset style="width:80%">
                            <legend>Ubicacion Geografica </legend>
                            <br>
                            <label >Pais:</label>
                            <input type="text" name="pais" readonly value="El Salvador" class="form-control">
                            <label for="departamentos">Tipo de Division:</label>
                            <select name="tipodivision" class="form-control">
                                <option value="Sonsonate">Sonsonate</option>
                                <option value="Ahuachapan">Ahuachapan</option>
                                <option value="Santa Ana">Santa Ana</option>
                                <option value="Chalatenango">Chalatenango</option>
                                <option value="San Salvador">San Salvador</option>
                                <option value="Cabañas">Cabañas</option>
                                <option value="La Libertad">La Libertad</option>
                                <option value="La Paz">La Paz</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="San vicente">San vicente</option>
                                <option value="Usulutan">Usulutan</option>
                                <option value="La Union">La union</option>
                                <option value="Morazan">Morazán</option>
                                <option value="Cuscatlan">Cuscatlan</option>
                            </select>
                            <label for="region" class="col-sm-2 col-form-label">Region:</label>
                            <input type="text" name="region" class="form-control">
                            <label  name="subregion" class="col-sm-2 col-form-label">Sub Region:</label>
                            <input type="text" name="subregion" class="form-control">
                        </fieldset>
                </div>
            </section>
        </div>
    </div>
    <br>
    <div class="row ">
        <div class="row " id="entradas">
            <section class="card">
                <div class="card-body">
                    
                        <fieldset style="width:80%">
                            <legend>Codigo del país </legend>

                            <labe class="col-sm-2 col-form-label">ISO 3166-1 alpha2:</labe>
                            <input type="text" name="iso" class="form-control">
                            <labe class="col-sm-2 col-form-label">alpha 3</labe>
                            <input type="text" name="alpha" class="form-control">
                            <label class="col-sm-2 col-form-label">Numerico:</label>
                            <input type="text" name="numerico" class="form-control">
                            <label class="col-sm-2 col-form-label">COI</label>
                            <input type="text" name="coi" class="form-control">
                        </fieldset>
                    
                </div>
            </section>
        </div>
    </div>

    <br>
    <div class="row ">
        <div class="row " id="entradas">
            <section class="card">
                <div class="card-body">
                   
                        <fieldset style="width:80%">
                            <legend>Direccion </legend>
                            <labe class="col-sm-2 col-form-label">Barrio/Colonia/Residencia</labe>
                            <input type="text" name="residencia" class="form-control">
                            <labe class="col-sm-2 col-form-label">Calle/pasaje</labe>
                            <input type="text" name="calle" class="form-control">
                            <label class="col-sm-2 col-form-label">N° de casa/Apartamento</label>
                            <input type="text" name="apartamento" class="form-control">
                            <label class="col-sm-2 col-form-label">Estado Civil:</label>
                            <select class="form-control" name ="estadocivil">
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Soltero">Soltero</option>
                            </select>
                        </fieldset>
                   
                </div>
            </section>
        </div>
    </div>
    <br>

  <div class="d-md-flex justify-content-md-end btn-group " role="group" aria-label="Basic example" >
  <a href="{{url('ReferenciasPersonales/create')}}" class="btn btn-success btn-lg btn-block">Referencias personales</a>
  <a href="{{url('vistaDomicilio/create')}}" class="btn btn-success btn-lg btn-block">Domicilio</a>
  <a href="{{url('ActividadEconomica/create')}}" class="btn btn-success btn-lg btn-block">Actividad Economica </a>
  <a href="{{url('personas/create')}}" class="btn btn-success btn-lg btn-block">Beneficiarios</a>
  <a href="{{url('vistaAnexos/create')}}" class="btn btn-success btn-lg btn-block">Anexos</a>
   </div>
   <br>
    <br>
    <p align="center">
    <input type="submit" class="btn btn-primary btn-lg btn-block" value="GUARDAR">
    </p>  
</form>

<p align="left">
        <a href="{{url('/')}}" class="btn btn-primary btn-lg btn-block"> Regresar</a>
    </p>
</main>
 
<footer class="p-3 mb-2 bg-primary text-white">
    <br>
    <center>Universidad De El Salvador.</center>
    <center>Facultad De Ingenieria y Arquitectura</center>
    <center>TECNOLOGIA ORIENTADA A OBJETOS</center>
    <br>
</footer>