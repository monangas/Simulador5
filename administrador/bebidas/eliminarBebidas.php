<?php
@include_once '../../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
echo $sql = "delete from bebidas where idbebidas='".$_GET['i']."'";
$result = $con->consulta($sql);
$con->cerrarConexion();


?>