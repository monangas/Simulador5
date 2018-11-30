<?php
@include_once '../../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
echo $sql = "delete from alimentos where idalimentos='".$_GET['i']."'";
$result = $con->consulta($sql);
$con->cerrarConexion();


?>