<?php

require '../../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
$insertarBebida="INSERT INTO alimentos  VALUES (null,'".ucfirst(strtolower($_POST["alimento"]))."', '".ucfirst(strtolower($_POST["presentacion2"]))."', '".ucfirst(strtolower($_POST["grupo2"]))."')";
$con->consulta($insertarBebida);
$con->cerrarConexion();
header("location:../bebidas.php");
