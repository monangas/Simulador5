<?php
require_once '../../conexion/conexion1.php';

$con = new conexion();
$con->conexion();
$sql="delete from persona where documento='".$_GET['doc']."'";
$r = $con->consulta($sql);
echo $r;
$con->cerrarConexion();
?>