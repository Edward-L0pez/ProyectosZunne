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
        <h3 class="ok">¡Te has inscrito correctamente!</h3>
        <a  class="enmenu nobac" href="tablaDep.php">Lista de registrados</a> 
       <?php
    } else {
        ?> 
        <h3 class="bad">¡Error! al parecer ya esta citado este empleado</h3>
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
