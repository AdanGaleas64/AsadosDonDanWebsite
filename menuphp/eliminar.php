<?php

include '../conexion/conexion.php';

$id_menu=$_REQUEST['id_menu'];
$sqlEliminar="DELETE FROM menu WHERE id_menu=$id_menu";
$resultado=mysqli_query($conexion, $sqlEliminar);

if($resultado)
{
    echo"<h1>El registro ha sido eliminado</h1>";
}
else
{
    echo"<h1>El registro no ha sido eliminado</h1>";
}
echo "<a href='index.php'>Regresar</a>";
?>
