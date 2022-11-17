

<?php
    include("con_db.php");
if(isset($_GET['num_depto'])){
$cedula =$_GET['num_depto'];

$sql = "DELETE FROM `departamento` WHERE num_depto = ".$cedula;


 $resultado = mysqli_query($conex,$sql);


if($resultado) {
     ?>
    <h3 class="ok">¡Eliminado!</h3>
    <br>
  
    <a  class="enmenu " href="tablaDep.php">Lista de registrados</a> 

   <?php

} else {
    ?>
   <h3 class="bad">¡Ups ha ocurrido un error!</h3>
 
 <?php   
 } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
