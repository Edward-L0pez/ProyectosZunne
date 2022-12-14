<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tabla Empleados</title>
</head>

<body>



<div class="container">

    <div class="card shadow p-3 mb-5 bg-body rounded">
         <a  class="enmenu" href="index.php">Volver</a> 
        <h1 class="card-header">Empleados</h1>


        <div class="card-body">

            <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Cédula</td>
                    <th>Teléfono</td>
                    <th>Nombre(s)</td>
                    <th>Apellido Materno</th>
                    <th>Apellido Paterno</th>
                    <th>Funciones</th>
                    

                </tr>
                </thead>
                <?php
                include("con_db.php");
                $sql = "SELECT  * FROM empleado";
                $query = mysqli_query($conex, $sql);
                
                



                while ($row = mysqli_fetch_array($query) ) {
                    $cedula = $row['cedula'];
                    $telefono = $row['telefono'];
                    $nombre = $row['nombre'];
                    $apellidoP = $row['apellidoP'];
                    $apellidoM = $row['apellidoM'];
                    
                   

                   

                    
                ?>
 <tbody>
                            
                    <tr>
                        <td> <?php echo $cedula ?> </th>
                        <td> <?php echo $telefono ?> </th>
                        <td> <?php echo $nombre ?> </th>
                        <td> <?php echo $apellidoP ?></td>
                        <td> <?php echo $apellidoM ?></td>
                        <td>
                    <div>
                     <a class="ok" href="editarEmp.php?cedula=<?php echo $cedula ?>">Editar</a>
                     <a class="bad" href="eliminarEmp.php?cedula=<?php echo $cedula ?>">Eliminar</a>
                       </div>
                       <br>
                </td>
                    </tr>
                <?php } 
                
                include("eliminarEmp.php");
                ?>
                
                </tbody>
            </table>

        </div>
        </div>
    </div>

    <?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'errorcedula') {
            ?>
                <div class="bad " role="alert">
                    Error! El numero de departamento que ingreso ya esta registrada.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

<?php
            if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') {
            ?>
                <div class=" bad " role="alert">
                   Eliminado! Se elimino correctamente.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
            }
            ?>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </footer>
</body>

</html>