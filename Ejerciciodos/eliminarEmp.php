<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
<?php
    include("con_db.php");
    if(isset($_GET['cedula'])){
$cedula =$_GET['cedula'];

$sql = "DELETE FROM `empleado` WHERE cedula =".$cedula;


 $resultado = mysqli_query($conex,$sql);
 

if($resultado) {
     ?>
    <h3 class="ok">¡Eliminado!</h3>
    <br>
  
    <a  class="enmenu" href="tablaEmp.php">Lista de registrados</a> 

   <?php
 
} else {
    ?>
   <h3 class="bad">¡Ups ha ocurrido un error!</h3>
 
 <?php   
 } 

    }
?>

