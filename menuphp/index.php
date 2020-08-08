<?php

include '../conexion/conexion.php';
if(!empty($_REQUEST['buscar']))
{
    $buscar=$_REQUEST['buscar'];
    $query="SELECT * FROM menu WHERE nombre_platillo LIKE'%$buscar%'";
    $registros=mysqli_query($conexion,$query);
}
else
{
    $query="SELECT * FROM menu";
    $registros=mysqli_query($conexion,$query);
}
?>

<?php
include '../H-F/header.php';
?>

<div id="botonIngresar">
    <a href="ingresar.php">Ingresar</a>
</div>
<form action="index.php" method="get">
    <div class="form-group">
        <input type="text" name="buscar" style="position: relative; left: 1020px; top: -85px;">
        <button id="botonBuscar" type="submit" name="Buscar">Buscar:</button>
    </div>
</form>
<table  align="center" border="1" class="table-hover">
    <thead class="container" style="background-color: #062c33; color: #ffffff">
    <tr>
        <td rowspan="2">ID Platillo</td>
        <td rowspan="2">Nombre Platillo</td>
        <td rowspan="2">Precio </td>
        <td rowspan="2">Tipo de Carnes</td>
        <td colspan="2" style="text-align: center">Opciones</td>
    </tr>
    <tr>
        <td >Modificar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody class="container" style="background-color: #6c757d; color: #ffffff">
    <?php
    while($row=mysqli_fetch_array($registros))
    {
        ?>
        <tr>
            <td><?php echo $row['id_menu'];?></td>
            <td><?php echo $row['nombre_platillo'];?></td>
            <td><?php echo $row['precio'];?></td>
            <td><?php
                switch ($row['Idcarnes'])
                {
                    case 1:echo"Cerdo";
                        break;
                    case 2:echo"Pollo";
                        break;
                    case 3:echo"Res";
                        break;
                }
                ?>
            </td>
            <td>
                <a title="Modificar" href="modificar.php?id_menu=<?php echo $row['id_menu']; ?>">
                    <img src="../imagenes/modificar.png" width="30" height="30">
                </a>
            </td>
            <td>
                <a title="Eliminar" href="eliminar.php?id_menu=<?php echo $row['id_menu']; ?>">
                    <img src="../imagenes/eliminar.png" width="30" height="30">
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>



<?php
include '../H-F/footer.php';
?>

