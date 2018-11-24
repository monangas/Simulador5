<?php
include_once '../../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
unlink("../../imagenes/".$_GET['c'].'.jpg');
$sql="delete from receta where idreceta='".$_GET['c']."'";

$r = $con->consulta($sql);

$con->cerrarConexion();
?>