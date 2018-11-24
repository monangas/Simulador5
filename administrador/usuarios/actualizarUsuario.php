<?php
require_once '../../conexion/conexion1.php';

$con = new conexion();
$con->conexion();
$sql="UPDATE persona SET documento='".$_GET['d']."', primer_nombre='".$_GET['pn']."', segundo_nombre='".$_GET['sn']."', primer_apellido='".$_GET['pa']."', segundo_apellido='".$_GET['sa']."', activo='".$_GET['a']."', rol='".$_GET['r']."' WHERE documento='".$_GET['d']."'";
$r = $con->consulta($sql);
echo $r;
$con->cerrarConexion();

?>