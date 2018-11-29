<?php

@include_once '../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
$sql = "SELECT * FROM bebidas ORDER BY idbebidas, grupo DESC";
$result = $con->consulta($sql);
$tipo = "";
$i = 1;
$z=TRUE;


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        if ($tipo != $row['grupo']) {
            if(!$z){
                
               echo "</table></div>";
               
            }
          
            echo '<h4><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapse' . $i . '"><span class="glyphicon glyphicon-eye-open"></span></button>'
            . '' . $row['grupo'] . '</h4>'
            . ' <div id="collapse' . $i . '" class="collapse">';
            echo '<table class="table table-responsive table-striped table-bordered"><tr><th colspan="3">' . $row['grupo'] . '</th></tr>';
            $tipo = $row['grupo'];
            $i++;
            $z=FALSE;
        }
        echo "<tr><td>" . $row["idbebidas"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["presentacion"] . "</td></tr>";
      
    }
} else {
    echo "0 results";
}
echo "</table><div>";
$con->cerrarConexion();
?>