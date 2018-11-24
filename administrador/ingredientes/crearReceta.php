<?php
@session_start();
require '../../conexion/conexion1.php';
require '../../subirImagenes.php';
$con=new conexion();
$con->conexion();
$insertarReceta="INSERT INTO `receta` (`nombre`, `porciones`, `tipo`, imagen) VALUES ('".ucfirst(strtolower($_POST["nombre_receta"]))."', '".$_POST["porciones"]."', '".ucfirst(strtolower($_POST["tipo"]))."','".$rutaBase."')";
$con->consulta($insertarReceta);
$numero_receta;
$r=$con->consulta("select max(idreceta) from receta");
while ($rows = $r->fetch_array()) {
     $numero_receta=$rows['max(idreceta)'];
}

$ai=0;

while ($ai<=$_SESSION['chk']){
  
    if(isset($_POST['c'.$ai])){
   
        $query1="INSERT INTO `ingrediente_por_receta` (`receta_idreceta`, `ingrediente_idingrediente`, `cantidad`) VALUES ('".$numero_receta."', '".$ai."','".$_POST['cantidad'.$ai]."')";
        $con->consulta($query1);
    } 
    
    $ai++;
}
$con->cerrarConexion();
header("location:../a.php");
