<?php
require_once './../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
 $query="delete from tipo_evento where idtipo_evento= ".$_GET['id'] ;
if($con->consulta($query)){
echo "Registro eliminado.";
    
}else{
    echo "El registro NO se pudo eliminar.";
}
$con->cerrarConexion();
