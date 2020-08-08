<?php

include '../conexion/conexion.php';
?>
<html>
<head>
    <title>Ingresar Platillo</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.min.css">
    <link href="../estilos/estiloIndex.css" rel="stylesheet">
    <meta name="viewport" content="width-device-width">
</head>
<body>
<div class="formularioMenu">
    <h4 style="text-align: center;">REGISTRO DE PLATILLOS</h4>
    <form class="container" action="guardar.php" method="post">
        <label>Nombre Platillo:</label>
        <input type="text" name="nombre_platillo">
        <p></p>
        <label>Precio:</label>
        <input type="text" name="precio">
        <p></p>
        <label>Codido Carenes</label>
        <br>
        <select name="Idcarnes">
            <?php
            $sql="select * from codigo_carnes";
            $registro=mysqli_query($conexion,$sql);
            while($reg=mysqli_fetch_array($registro))
            {
                echo "<option value=\"$reg[codigo_carnes]\">$reg[nombre_carnes]</option>";
            }
            ?>
        </select>
        <p></p>
        <button id="botonGuardarEdicion" type="submit" name="guardar">Guardar</button>
        <p></p>
        <button id="botonCancelarEdicion"><a href="index.php">Cancelar</a></button>
    </form>
</div>
</body>
</html>

