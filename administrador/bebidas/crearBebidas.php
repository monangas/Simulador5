<?php

require '../../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
echo $insertarBebida="INSERT INTO bebidas  VALUES (null,'".ucfirst(strtolower($_POST["bebida"]))."', '".ucfirst(strtolower($_POST["presentacion"]))."', '".ucfirst(strtolower($_POST["grupo"]))."')";
$con->consulta($insertarBebida);
$con->cerrarConexion();
header("location:../bebidas.php");
