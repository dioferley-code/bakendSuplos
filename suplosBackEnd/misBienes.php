<?php

$con = include('conexion.php');
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "INSERT into intelcost_bienes (id_bienes, eliminado) values ($id,1)";
    $resp = $con->query($consulta);
}
include('index.php')
?>