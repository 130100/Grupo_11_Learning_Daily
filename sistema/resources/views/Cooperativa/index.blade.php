<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Inicio Cooperativas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="row titulo">
        <h1 class="p-3 mb-2 bg-primary text-white">
            <center>REGISTRO DE COOPERATIVA</center>
        </h1>
    </div>

    <br>

    <main class="container py-5">
    <section class="card">
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Lugar</th>
                            <th>Fecha Acta</th>
                            <th>Fecha Ingreso</th>
                            <th>Firma</th>
                            <th>Estructura Organizativa</th>
                            <th>Rol</th>
                            <!--<th>Acciones</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $cooperativa as $cooperativa )
                        <tr>
                            <td>{{ $cooperativa->id }}</td>
                            <td>{{ $cooperativa->lugar }}</td>
                            <td>{{ $cooperativa->fecha_acta }}</td>
                            <td>{{ $cooperativa->fecha_ingreso }}</td>
                            <td>
                                <div class="card" style="width: 8rem;">
                                    <img src="{{ asset('storage').'/'.$cooperativa->firma }}"  alt="">                                    
                                </div>                                
                                <!--{{ $cooperativa->firma }}-->
                            </td>
                            <td>{{ $cooperativa->estructura_organizativa }}</td>
                            <td>{{ $cooperativa->rol }}</td>
                            <!--<td>Editar | Borrar</td>-->
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </section>
    </main>

    <br>

    <p align="left">
        <button type="button" class="btn btn-primary btn-lg btn-block">Regresar</button>
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