<?php
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= Bienes.xls");

    $con = include('conexion.php');

    if (!empty($_POST['ciudad']) && !empty($_POST['tipo'])) {
        $ciudad = $_POST['ciudad'];
        $tipo = $_POST['tipo'];
        
        $consulta = "SELECT * FROM casas WHERE Ciudad Like '%$ciudad%' AND Tipo Like '%$tipo%' ";
        $res = $con->query($consulta);
    }

    if (!empty($_POST['ciudad']) && empty($_POST['tipo'])) {
        $ciudad = $_POST['ciudad'];
        
        $consulta = "SELECT * FROM casas WHERE Ciudad Like '%$ciudad%' ";
        $res = $con->query($consulta);
    }

    if (empty($_POST['ciudad']) && !empty($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
        
        $consulta = "SELECT * FROM casas WHERE Tipo Like '%$tipo%' ";
        $res = $con->query($consulta);
    }
?>

<table>
    <tr>
        <td>Direccion</td>
        <td>Ciudad</td>
        <td>Telefono</td>
        <td>Codigo postal</td>
        <td>Tipo</td>
        <td>Precio</td>
    </tr>
    <?php while($item = $res->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $item['Direccion']; ?></td>
            <td><?php echo $item['Ciudad']; ?></td>
            <td><?php echo $item['Telefono']; ?></td>
            <td><?php echo $item['Codigo_Postal']; ?></td>
            <td><?php echo $item['Tipo']; ?></td>
            <td><?php echo $item['Precio']; ?></td>
        </tr>
    <?php } ?>
</table>

