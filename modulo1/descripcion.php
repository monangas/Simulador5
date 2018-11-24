<?php

require_once '../conexion/conexionDB.php';

$queryd = $mysqli->query("SELECT idtipologia, descripcion FROM tipologia where idtipologia=" . $_GET['id'] . "");
while ($rows = $queryd->fetch_array()) {
    echo '' . $rows['descripcion'] . '';
}

?>
