<?php
require_once './../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
$query="update tipo_evento set ". $_POST['c']."='".$_POST['d']."' where idtipo_evento= ".$_POST['id'] ;
if($con->consulta($query)){
echo "Registro actualizado.";
    
}else{
    echo "El registro NO se pudo actualizar.";
}
$con->cerrarConexion();
?>
