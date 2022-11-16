

<?php
    include("con_db.php");

$cedula =$_GET['num_depto'];

$sql = "DELETE FROM `departamento` WHERE num_depto = ".$cedula;


 $resultado = mysqli_query($conex,$sql);

 echo $sql;
if($resultado) {
     ?>
    <h3 class="ok">¡Eliminado!</h3>
    <br>
  
    <a  class="enmenu nobac" href="tablaEmp.php">Lista de registrados</a> 

   <?php
   header("location:tablaDep.php");
} else {
    ?>
   <h3 class="bad">¡Ups ha ocurrido un error!</h3>
 
 <?php   
 } 
?>

