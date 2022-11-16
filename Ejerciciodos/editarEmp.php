<?php

include("con_db.php");

// if($conex){
//     echo "todo bien cool";
// }else{
//   echo "todo mal";
// }

$cedula = $_GET['cedula'];
$sql = "SELECT * FROM empleado WHERE cedula ='" . $cedula. "'";
$resultado = mysqli_query($conex,$sql);
while ($fila = mysqli_fetch_assoc($resultado)){;
?>
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
    <input class="form-control" type="number" value="<?php echo $fila['cedula'] ?>" name="cedula" placeholder="Escribe tu cedula">
    </div>
    <div class="card-body">
    <input class="form-control"  type="tel" value="<?php echo $fila['telefono'] ?>" name="telefono" placeholder="Escribe tu número teléfonico">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" value="<?php echo $fila['nombre'] ?>" name="nombre" placeholder="Escribe tu(s) nombre(s)">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" value="<?php echo $fila['apellidoP'] ?>" name="apellidoP" placeholder="Escribe tu apellido paterno">
    </div>
    <div class="card-body">
    <input class="form-control" type="text" value="<?php echo $fila['apellidoM'] ?>" name="apellidoM" placeholder="Escribe tu apellido materno">
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
    <input type="submit" class="enmenu nobac" name="actualizar" value="Actualizar">
    </div>
   
           
</form>

</div>
</section>
<?php
}

?>

<?php
if (isset($_POST['actualizar'])) {
    if (strlen($_POST['cedula']) >= 1 
     && strlen($_POST['telefono']) >= 1 
     && strlen($_POST['nombre']) >= 1 
     && strlen($_POST['apellidoP']) >= 1 
     && strlen($_POST['apellidoM']) >= 1
     
   ) {

	    $cedula = trim($_POST['cedula']);
	    $telefono = trim($_POST['telefono']);
        $nombre = trim($_POST['nombre']);
        $apellidoP = trim($_POST['apellidoP']);
        $apellidoM = trim($_POST['apellidoM']);
        // $num_depto = trim($_POST['num_depto']);
        

	    $consulta = "UPDATE `empleado` SET `telefono`='".$telefono."',`nombre`='".$nombre."',`apellidoP`='".$apellidoP."',`apellidoM`='".$apellidoM."' WHERE `cedula`= '".$cedula."'";
	    $resultado = mysqli_query($conex,$consulta);
	  
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Los datos se han actualizado!</h3>
            <br>
          
            <a  class="enmenu nobac" href="tablaEmp.php">Lista de registrados</a> 
    
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
      }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </footer>
</body>
</html>