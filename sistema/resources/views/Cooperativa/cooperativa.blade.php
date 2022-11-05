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
        <h1 class="p-3 mb-2 bg-primary text-white">
            <center>REGISTRO DE COOPERATIVA</center>
        </h1>
    </div>

    <main class="container py-5">

        <div class="row " id="entradas">

            <section class="card">

                <div class="card-body">

                    <h1 class="text-center">Cooperativa</h1>

                    <label for="" class="py-2">Complete la siguiente información</label>
                    
                    <form action="{{ url('Cooperativa/{Cooperativa}/cooperativa') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row mb-3 py-3">
                            <label for="" class="col-sm-2 col-form-label">Lugar</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="string" name="lugar" id="lugar">
                            </div>
                        </div>

                        <div class="row py-2">
                            <div class="col-sm-2">
                                <label for="formFile" class="form-label">Fecha del acta</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="fecha_acta" id="fecha_acta">
                            </div>
                            <div class="col-sm-2">
                                <label for="formFile" class="form-label">Fecha de ingreso</label>
                            </div>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" name="fecha_ingreso" id="fecha_ingreso">
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col-sm-2">
                                <label for="formFile" class="form-label">Firma</label>
                            </div>
                            <div class="col-sm">
                                <input class="form-control" type="file" name="firma" id="firma">
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col-md-3">
                                <label for="formfile" class="form-label">Estructura organizativa</label>
                            </div>
                            <div class="col-sm">
                                <select class="form-select" aria-label="Default select example" type="string" name="estructura_organizativa" id="estructura_organizativa">
                                    <option selected>Seleccionar</option>
                                    <option value="Asamblea General">Asamblea General</option>
                                    <option value="Consejo de Administración">Consejo de Administración</option>
                                    <option value="Gerencia General">Gerencia General</option>
                                </select>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col-md-3">
                                <label for="formfile" class="form-label">Rol</label>
                            </div>
                            <div class="col-sm">
                                <select class="form-select" aria-label="Default select example" type="string"  name="rol" id="rol">
                                    <option selected>Seleccionar</option>
                                    <option value="Presidente">Presidente</option>
                                    <option value="Secretaria/o">Secretaria/o</option>
                                    <option value="Vocal">Vocal</option>
                                    <option value="Suplente">Suplente</option>
                                </select>
                            </div>
                        </div>

                        <p align="center">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="GUARDAR">
                        </p>

                    </form>

                </div>

            </section>

    </main>

    <p align="right">
        <button type="button" class="btn btn-primary btn-lg btn-block">Continuar</button>
    </p>

    <br>
    
    <footer class="p-3 mb-2 bg-primary text-white">
        <br>
        <center>Universidad De El Salvador.</center>
        <center>Facultad De Ingenieria y Arquitectura</center>
        <center>TECNOLOGIA ORIENTADA A OBJETOS</center>
        <br>
    </footer>
</body>

</html>