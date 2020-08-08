<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 19:13
 */

include '../conexion/conexion.php';

$id_menu=$_REQUEST['id_menu'];

$sql="select * from menu where id_menu='$id_menu'";
$registro=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($registro);
?>
<html>
<head>
    <title>Modificar Platillo</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.min.css">
    <link href="../estilos/estiloIndex.css" rel="stylesheet">
    <meta name="viewport" content="width-device-width">
</head>
<body>
<div class="formularioMenu">
    <h4 style="text-align: center;">EDICION DE PLATILLO</h4>
    <form class="container" action="modificar2.php" method="post">
        <input type="hidden" name="id_menu" value="<?php echo $row['id_menu'] ?>">

        <label>Nombre Platillo</label>
        <input type="text" name="nombre_platillo" value="<?php echo $row['nombre_platillo'] ?>">
        <p></p>
        <label>Precio:</label>
        <br>
        <input type="text" name="precio" value="<?php echo $row['precio'] ?>">
        <p></p>
        <label>Codigo Carnes</label>
        <br>
        <select name="Idcarnes">
            <?php
            $sql="select * from codigo_carnes";
            $registro=mysqli_query($conexion,$sql);
            while($reg=mysqli_fetch_array($registro))
            {
                if($row['codigo_carnes']==$reg['codigo_carnes'])
                {
                    echo "<option selected value=\"$reg[codigo_carnes]\">$reg[nombre_carnes]</option>";
                }
                else
                {
                    echo "<option value=\"$reg[codigo_carnes]\">$reg[nombre_carnes]</option>";
                }
            }
            ?>
        </select>
        <p></p>
        <button id="botonGuardarEdicion" type="submit" name="guardar">Modificar</button>
        <p></p>
        <button id="botonCancelarEdicion"><a href="index.php">Cancelar</a></button>
    </form>
</div>
</body>
</html>
