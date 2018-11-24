<?php
require_once '../../conexion/conexion1.php';
$con=new conexion();
$con->conexion();
$consultaIngredientes="INSERT INTO `ingrediente` (`ingrediente`, `unidad`) VALUES ('".ucfirst(strtolower($_GET["i"]))."', '".ucfirst(strtolower($_GET["u"]))."');
";
$r = $con->consulta($consultaIngredientes);
require_once './listaCheckbox.php';