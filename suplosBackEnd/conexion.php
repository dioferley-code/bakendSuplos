<?php
    $host = 'localhost';
    $bd = 'test';
    $user = 'root';
    $pass = '';

    $con = new mysqli($host,$user,$pass,$bd);
    if($con -> connect_errno){
        die("fade conexion :(". $con -> mysqli_connect_errno() . ") " . $con ->  mysqli_connect_error());
    }
    return $con;
?>