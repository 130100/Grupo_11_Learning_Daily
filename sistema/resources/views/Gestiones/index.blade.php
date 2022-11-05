<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="row titulo">
            <h1 class="p-3 mb-2 bg-primary text-white">
                <center>REPORTE</center>
            </h1>
        </div>
    </header>

    <main class="container py-5">

        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Primer nombre</th>
                                <th>Segundo nombre </th>
                                <th>Tercer nombre</th>
                                <th>Primer Apellido</th>
                                <th>Segundo Apellido</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                            <tr>
                                <td>{{$gestion->id}}</td>
                                <td>{{$gestion->primernombre}}</td>
                                <td>{{$gestion->segundonombre}}</td>
                                <td>{{$gestion->tercernombre}}</td>
                                <td>{{$gestion->primerapellido}}</td>
                                <td>{{$gestion->segundoapellido}}</td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>genero</th>
                                <th>Tipo de documento</th>
                                <th>dui</th>
                                <th>nup</th>
                                <th>Fecha de Nacimiento</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                            <tr>                                
                                <td>{{$gestion->id}}</td>
                                <td>{{$gestion->genero}}</td>
                                <td>{{$gestion->tipodoc}}</td>
                                <td>{{$gestion->dui}}</td>
                                <td>{{$gestion->nup}}</td>
                                <td>{{$gestion->fechadenacimiento}}</td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Nacionalidad</th>
                                <th>pais</th>
                                <th>tipo de Division</th>
                                <th>Region</th>
                                <th>Sub Region</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                            <tr>
                                <td>{{$gestion->id}}</td>
                                <td>{{$gestion->nacionalidad}}</td>
                                <td>{{$gestion->pais}}</td>
                                <td>{{$gestion->tipodivision}}</td>
                                <td>{{$gestion->region}}</td>
                                <td>{{$gestion->subregion}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th> ISO</th>
                                <th>Alpha 3</th>
                                <th>Numerico</th>
                                <th>COI</th>
                                <th>Residencia</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                            <tr>
                                <td>{{$gestion->id}}</td>                                
                                <td>{{$gestion->iso}}</td>
                                <td>{{$gestion->alpha}}</td>
                                <td>{{$gestion->numerico}}</td>
                                <td>{{$gestion->coi}}</td>
                                <td>{{$gestion->residencia}}</td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <br>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Calle</th>
                                <th>Apartamento</th>
                                <th>Estado civil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gestiones as $gestion)
                            <tr>
                                <td>{{$gestion->id}}</td>
                                <td>{{$gestion->calle}}</td>
                                <td>{{$gestion->apartamento}}</td>
                                <td>{{$gestion->estadocivil}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </main>
    

    <footer class="footer mt-auto py-3 bg-primary text-white">
        <div class="container">
            <center>Universidad De El Salvador.</center>
            <center>Facultad De Ingenieria y Arquitectura</center>
            <center>TECNOLOGIA ORIENTADA A OBJETOS</center>
            <center>&copy; 2022 - GRUPO 11</center>
        </div>
    </footer>

</body>

</html>