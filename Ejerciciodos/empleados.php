<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Empleados</title>
</head>
<body>

<section class="card">
 
<div class="card-body">

<div class="enlace">
     <a class="enmenu nobac " href="index.php">  <span class="letazul nobac">Regresar al menú  </span> </a>
 </div>
<form  method="post">
    <h1 class="card text-center">Registrar Empleados</h1>
   
    <div class="card-body">
    <input class="form-control" type="number" name="cedula" placeholder="Escribe tu cedula">
    </div>
    <div class="card-body">
    <input class="form-control"  type="tel" name="telefono" placeholder="Escribe tu número teléfonico">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" name="nombre" placeholder="Escribe tu(s) nombre(s)">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" name="apellidoP" placeholder="Escribe tu apellido paterno">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" name="apellidoM" placeholder="Escribe tu apellido materno">
    </div>
    <!-- div class="card-body">
    <select class="form-select form-control form-select-sm" aria-label=".form-select-sm example" name="num_depto">
                    <option  selected value="">--Seleccione--</option>
                    <?php 
                    include("con_db.php");
                    $sql="SELECT * FROM departamento";
                    $query=mysqli_query($conex, $sql);
                    
                    while($row=mysqli_fetch_array($query)){
                       $iddepa=$row['num_depto'];
                        $nombdepa=$row['nom_depto'];
                    
                     ?>
                     <option  value="<?php echo $iddepa ?> " > <?php echo $nombdepa ?> </option>

                     <?php } ?>
    </select>
    </div> -->
    <div class="card-body">
    <input type="submit" class="enmenu nobac" name="registerr">
    </div>
   
           
</form>

</div>
</section>
<?php

include("registrarEmp.php");

?>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </footer>
</body>
</html>