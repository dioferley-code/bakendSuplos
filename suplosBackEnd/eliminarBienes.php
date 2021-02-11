<?php

$con = include('conexion.php');
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "UPDATE intelcost_bienes SET eliminado = 0 WHERE id_bienes = $id";
    $resp = $con->query($consulta);
}
include('index.php')
?>