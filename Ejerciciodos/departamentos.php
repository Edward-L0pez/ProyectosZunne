


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Departamentos</title>
</head>
<body>
<?php

include("registrarDep.php");

?>
<section class="card">
<div class="card-body">


<div class="enlace">
     <a class="enmenu nobac letazul" href="index.php"> <span class="letazul nobac"> Regresar al menú</span> </a>
 </div>
    <form method="post">
    <h1 class="card text-center" >Registrar Departamentos</h1>
<div class="card-body">
<input class="form-control" type="text" name="num_depto" placeholder="Escribe el id del Depa" value="<?php if(isset($id)) echo $id ?>">
</div>

<div class="card-body">
<input class="form-control" type="text" name="nombre" placeholder="Escribe el título del Depa" value="<?php if(isset($nombre)) echo $nombre?>" >
</div>

<div class="card-body">
<select class="form-select form-control form-select-sm" aria-label=".form-select-sm example" name="cedula_emp">
                    <option  selected value=" " > --SELECCIONA UNA--</option>
                    <?php 
                    include("con_db.php");
                    $sql="SELECT * FROM empleado";
                    $query=mysqli_query($conex, $sql);
                    
                    while($row=mysqli_fetch_array($query)){
                        $id=$row['cedula'];
                        $nombre = $row['nombre'];
                        $apellidoP = $row['apellidoP'];
                        $apellidoM = $row['apellidoM'];
                        $nombreComplet0 = $nombre . " " . $apellidoP . " " . $apellidoM;

                    if(isset($_POST['nombre']) && $_POST['cedula']==$id){ ?>
                     
                     <option  value="<?php echo $id ?> " > <?php echo $nombreComplet0 ." - " . $id ?> </option>
                   <?php
                    } else {
    
                       
                       
    
                        
                     ?>
                     <option  value="<?php echo $id ?> " > <?php echo $nombreComplet0 ." - " . $id ?> </option>

                     <?php } } ?>

    </select>
    </div>
    
<div class="card-body">
<input type="submit" class="enmenu nobac" name="register">
</div>     
       </form>
    </div>
</section>
   

</body>
</html>