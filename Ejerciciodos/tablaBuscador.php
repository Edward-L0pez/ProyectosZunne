<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tabla Agrupada</title>
</head>
<body>


<div class="card-body">
    <input type="text" class=" nobac form-control card-header centrar" style="width:20rem; height: 5rem" id="search" placeholder="Agrupar por...">
    </div>



    <div class="card shadow p-3 mb-5 bg-body rounded">
        <div class="nobac">
        <a class="enmenu" href="index.php">Volver</a>
     
        <a class="enmenu" href="consultasRangos.php">Rangos</a>
        </div>
        <h1 class="card-header">Agrupaciones</h1>


        <div class="container">
            <div class="card-body">

                <table id="mytable" class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Número departamento</td>
                            <th>Nombre del departamento</td>
                            <th>Cedula del Empleado</th>
                            
                            <th>Teléfono</td>
                            <th>Nombre(s)</td>
                            <th>Apellido Materno</th>
                            <th>Apellido Paterno</th>
                            <!-- <th>Funciones</th> -->

                        </tr>
                    </thead>

                    <?php
                   include("con_db.php");

                    $sql2 = "SELECT `departamento`.*, `empleado`.*
                FROM `departamento` 
                    LEFT JOIN `empleado` ON `departamento`.`cedula_emp` = `empleado`.`cedula`";
                    $query2 = mysqli_query($conex, $sql2);


                    while ($row = mysqli_fetch_array($query2)) {
                        $num_depto = $row['num_depto'];
                        $nom_depto = $row['nom_depto'];
                        $idced = $row['cedula_emp'];
                        $cedula = $row['cedula'];
                        $telefono = $row['telefono'];
                        $nombre = $row['nombre'];
                        $apellidoP = $row['apellidoP'];
                        $apellidoM = $row['apellidoM'];


                    ?>

                        <tbody>
                            <tr>
                                <td> <?php echo $num_depto ?> </th>
                                <td> <?php echo $nom_depto ?> </th>
                                <td> <?php echo $idced ?> </td>
                               
                                <td> <?php echo $telefono ?> </th>
                                <td> <?php echo $nombre ?> </th>
                                <td> <?php echo $apellidoP ?></td>
                                <td> <?php echo $apellidoM ?></td>
                                <td>
                                    <!-- <div>
                    <a class="bad" href="eliminarDep.php?num_depto=<?php echo $num_depto ?>">Eliminar</a>
                    </div> -->
                                    <br>
                                </td>
                            </tr>
                        <?php }

                    include("eliminarDep.php");

                        ?>
                        </tbody>
                </table>

            </div>
        </div>
    </div>

    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script>
            // Write on keyup event of keyword input element
            $(document).ready(function() {
                $("#search").keyup(function() {
                    _this = this;
                    // Show only matching TR, hide rest of them
                    $.each($("#mytable tbody tr"), function() {
                        if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                            $(this).hide();
                        else
                            $(this).show();
                    });
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </footer>
</body>

</html>