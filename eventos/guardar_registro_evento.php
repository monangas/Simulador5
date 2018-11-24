<?php
require_once './../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
if (isset($_POST['tipologia'])) {
    
   if(empty($descripcion)){
       $descripcion="N/R";
   }else{
       $descripcion=$_POST['descripcion'];
   }
      $query="insert into tipo_evento values(null,'" . $_POST['Evento'] . "','".$descripcion."','".$_POST['tipologia']."')";
  
    $con->consulta($query);
    header("location:eventos.php");
}
$con->cerrarConexion();