<?php

@session_start();

require_once '../../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
$r = $con->consulta("SELECT * FROM ingrediente order by ingrediente asc");
$_SESSION['chk'] = 0;
while ($rows = $r->fetch_array()) {
    if ($_SESSION['chk'] < $rows['idingrediente']) {
        $_SESSION['chk'] = $rows['idingrediente'];
    }

    echo '<div class="col-sm-4 list-group live_filte">';
    echo '<a class="list-group-item" style="height: 62px;"> ';
    echo '<input type="checkbox" name="c' . $rows['idingrediente'] . '" ><p style="display: -webkit-inline-box;width: 43%;"> ' . $rows['ingrediente'] . '</p>';

    echo '<span class="badge1"><input type="text" class="numero" name="cantidad' . $rows['idingrediente'] . '" placeholder="Cantidad"   >';
    echo '<span class="superior" style="float:right;">'.$rows['unidad'] . '</span></span></a></div>';
}


$con->cerrarConexion();
?>
