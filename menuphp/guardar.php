<?php

include "../conexion/conexion.php";

$nombre_platillo=$_REQUEST['nombre_platillo'];
$precio=$_REQUEST['precio'];
$Idcarnes=$_REQUEST['Idcarnes'];




$sql="insert into menu(nombre_platillo,precio,Idcarnes) VALUES('$nombre_platillo','$precio', '$Idcarnes')";

$resultado=mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));

if($resultado)
{
    echo'<h2>Registro guardado exitosamente</h2>';
}
else
{
    echo'<h2>Problemas al guardar</h2>';
}

?>
<button><a href="index.php">Regresar</a></button>


