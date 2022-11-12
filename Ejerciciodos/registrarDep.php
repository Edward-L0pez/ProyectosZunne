<?php
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1
    && strlen($_POST['num_depto']) >= 1 
    && strlen($_POST['cedula_emp']) >= 1 ){

    $nombre = trim($_POST['nombre']);
    $id = trim($_POST['num_depto']);
    $cedula = trim($_POST['cedula_emp']);

    $consulta = "INSERT INTO departamento(nom_depto, num_depto, cedula_emp) VALUES ('$nombre','$id', '$cedula')";
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

// if($conex){
//     echo "todo bien cool";
// }else{
//   echo "todo mal";
// }
}
