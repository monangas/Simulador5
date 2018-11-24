<?php
require_once './../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
if (isset($_POST['tipologia'])) {
    
   
    echo $query="insert into tipologia values(null,'" . $_POST['tipologia'] . "','" . $_POST['descripcion'] . "')";
  
    $con->consulta($query);
    header("location:tipologia.php");
}