<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Rangos</title>
</head>

<body>

<section class="container">
    <div class="card shadow p-3 mb-5 bg-body rounded">
<form method = "POST" action = "ConsultasRangos.php">

<h1 class="card-header">Buscar cedula en los rangos de: </h1>
<div class="card-body">
<input type="text" class="form-control" placeholder="0000" name="buscar"  size="20"> 
</div>
<!-- <p>a</p> -->
 <div class="card-body">
<input type="text" class="form-control" placeholder="0000" name="buscar2"  size="20"><br><br>
</div>

<div class="card-body">
<input type="submit" name="hola"  class="enmenu nobac" value="Buscar"><br><br>
</div>
</form>


    <?php
   
    "SELECT `departamento`.*, `empleado`.*
    FROM `departamento`
        , `empleado`;"


    ?>


<?php

if (isset($buscar)){
   
?>

   <p>Debe especificar una cadena a buscar</p>
   <a href="index.php"  class="enmenu nobac">Volver</a>
    
  
    <?php
    exit;

}


include("con_db.php");

if(isset($_POST['hola'])){
$buscar = utf8_decode($_POST['buscar']);
$buscar2 = utf8_decode($_POST['buscar2']);


$sql = "SELECT * FROM empleado WHERE cedula BETWEEN '$buscar' AND '$buscar2'";

$result = mysqli_query($conex, $sql);

if ($row = mysqli_fetch_array($result)){
?>
"<table class="table table-hover" >
    
<thead class="thead-light">
<?php
//Mostramos los nombres de las tablas

mysqli_field_seek($result,0);

while ($field = mysqli_fetch_field($result)){

echo "<td><b>$field->name</b></td> \n";

}
?>
 </thead>

 <tbody>
<?php
echo "</tr> \n";

do {

echo "<tr> \n";

echo "<td>".$row["cedula"]."</td> \n";

echo "<td>".$row["telefono"]."</td> \n";

echo "<td>".$row["nombre"]."</td> \n";

echo "<td>".$row["apellidoP"]."</td> \n";

echo "<td>".$row["apellidoM"]."</td> \n";


echo "</tr> \n";

?>
</tbody>
<?php
} while ($row = mysqli_fetch_array($result));


} else {
    ?>
<p class="bad">¡No se ha encontrado ningún registro!</p>


</table> 

<?php

}
}

?>

</div>
</section >
<div class="card-body">
<a class="enmenu" href="tablaBuscador.php">Volver</a>
</div>
</body>

<footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script>
            // Write on keyup event of keyword input element
            $(document).ready(function() {
                $("#search").keyup(function() {
                    _this = this;
                    // Show only matching TR, hide rest of them
                    $.each($("#mytable tbody tr"), function() {
                        if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                            $(this).hide();
                        else
                            $(this).show();
                    });
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </footer>
</body>

</html>