<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tabla Departamentos</title>
</head>

<body>
<div class="container">

    <div class="card shadow p-3 mb-5 bg-body rounded">
         <a  class="enmenu" href="index.php">Volver</a> 
        <h1 class="card-header">Departamentos</h1>


        <div class="card-body">

            <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Cédula</td>
                    <th>Teléfono</td>
                    <th>Cedula del Empleado</th>
                   
                </tr>
                </thead>
                <?php
                include("con_db.php");
               
                $sql2 = "SELECT * FROM departamento";
                $query2 = mysqli_query($conex, $sql2);
               

                while ($row = mysqli_fetch_array($query2)) {
                    $cedula = $row['num_depto'];
                    $telefono = $row['nom_depto'];
                    $idced = $row['cedula_emp'];
                    
                ?>
 <tbody>
                            
                    <tr>
                        <td> <?php echo $cedula ?> </th>
                        <td> <?php echo $telefono ?> </th>
                        <td> <?php echo $idced ?> </td>
                        
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
        </div>
    </div>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </footer>
</body>

</html>