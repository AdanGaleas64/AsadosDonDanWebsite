<?php

include '../conexion/conexion.php';

$id_menu=$_REQUEST['id_menu'];
$nombre_platillo=$_REQUEST['nombre_platillo'];
$precio=$_REQUEST['precio'];
$Idcarnes=$_REQUEST['Idcarnes'];

$sqlModificar="update menu set nombre_platillo='$nombre_platillo', precio='$precio',Idcarnes='$Idcarnes' WHERE id_menu='$id_menu'";
$resultado=mysqli_query($conexion,$sqlModificar);

if($resultado)
{
    echo"<h1>Registro Modificado</h1>";
}
else
{
    echo"<h1>Problemas al Modificar</h1>";
}

?>
<a href="index.php">Regresar</a>
