<?php
    $con = include('conexion.php');
    $consulta = "SELECT * FROM intelcost_bienes inner join casas on intelcost_bienes.id_bienes = casas.Id WHERE eliminado = 1 ";
    $res = $con->query($consulta);
?>

<htm>
    <table>
        <?php while($item = $res->fetch_assoc()){ ?>
            <tr>
                <td class="img"><img src="./img/home.jpg"></td>
                <td>
                    <li><strong>Direccion:</strong> <?php echo $item['Direccion']; ?></li>
                    <li><strong>Ciudad:</strong> <?php echo $item['Ciudad']; ?></li>
                    <li><strong>Telefono:</strong> <?php echo $item['Telefono']; ?></li>
                    <li><strong>Codigo postal:</strong> <?php echo $item['Codigo_Postal']; ?></li>
                    <li><strong>Tipo:</strong> <?php echo $item['Tipo']; ?></li>
                    <li><strong>Precio:</strong> <?php echo $item['Precio']; ?></li>
                    <li><a class="btn " style="color: white; background: #820000; height: 31px;"  href="./eliminarBienes.php?id=<?php echo $item['Id'];?>">Eliminar</a></li>
                </td>
            </tr>
        <?php } ?>
    </table>
</html>