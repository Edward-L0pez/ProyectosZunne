<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
<?php
    include("con_db.php");
    if(isset($_GET['cedula'])){
$cedula =$_GET['cedula'];

$sql = "DELETE FROM `empleado` WHERE cedula =".$cedula;


 $resultado = mysqli_query($conex,$sql);
 

if($resultado) {
    
    header('Location: tablaEmp.php?mensaje=eliminado');
    
     ?>
    
    header('Location: tablaEmp.php?mensaje=eliminado');
    
  
    <!--<a  class="enmenu" href="tablaEmp.php">Lista de registrados</a> -->

   <?php
 
} else {
    header('Location: tablaEmp.php?mensaje=errorcedula');
    ?>
   <h3 class="bad">¡Esta citado!, primero elimina el departamento</h3>
 
 <?php   
 } 

    }
?>

