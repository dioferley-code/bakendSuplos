<?php
    $con = include('conexion.php');
    $consulta = "SELECT * FROM casas ORDER BY Precio ASC";
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
                    <li><a class="btn dark" style="color: white; height: 31px;" href="./misBienes.php?id=<?php echo $item['Id'];?>">Guardar</a></li>
                </td>
            </tr>
        <?php } ?>
    </table>
</html>