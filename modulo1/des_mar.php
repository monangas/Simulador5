<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../conexion/conexionDB.php';

$queryd = $mysqli->query("SELECT idmarco, des_mar FROM marco where idmarco=" . $_GET['id'] . "");
while ($rows = $queryd->fetch_array()) {
    echo '' . $rows['des_mar'] . '';
}
?>
