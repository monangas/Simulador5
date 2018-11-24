<?php

@session_start();
require_once '../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
$sql = "select * from persona where documento='" . $_POST['usuario'] . "' and password=md5('" . $_POST['password'] . "') ";
$r = $con->consulta($sql);
if ($rows = $r->fetch_array()) {
    $_SESSION['usuario'] = $rows['primer_nombre'] . " " . $rows['primer_apellido'];
    if ($rows['rol'] == "Administrador" && $rows['activo'] == "si") {
        header("location:a.php");
    }else if($rows['rol'] == "Estandar" && $rows['activo'] == "si"){
         header("location:../modulo1/index.php");
    }    
    else {
        ?>
        <script>
            alert("Puede ser que el usuario o la contraseña sean incorrectos, también verifique que el usuario no esté deshabilitado");
            window.open("../index.php", "_self");
        </script>
        <?php

    }
} else {
    header("location:../index.php");
}
?>