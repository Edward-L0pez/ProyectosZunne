<?php 
include("con_db.php");

if (isset($_POST['registerr'])) {
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
        

	    $consulta = "INSERT INTO empleado(cedula, telefono, nombre, apellidoP, apellidoM) VALUES  ('$cedula','$telefono','$nombre', '$apellidoP', '$apellidoM')";
	    $resultado = mysqli_query($conex,$consulta);
	  
        if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
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


if($conex){
    echo "todo bien cool";
}else{
  echo "todo mal";
}

?>