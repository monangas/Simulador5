<?php

if (isset($_SESSION['usuario'])) {
    ?>
    <script type="text/javascript">
        function eliminarAlimento(i) {
            var xhttp;
            if (window.XMLHttpRequest) {
                // code for modern browsers
                xhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById("demo").innerHTML = this.responseText;
                    
                }
            };
            xhttp.open("GET", "alimentos/eliminarAlimentos.php?i="+i, true);
            xhttp.send();
            alert("Se ha eliminado.");
            location.reload();
        } 
    </script>

    <?php

}
@include_once '../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
$sql = "SELECT * FROM alimentos ORDER BY idalimentos, grupo DESC";
$result = $con->consulta($sql);
$tipo = "";
$i = 1;
$z = TRUE;

@session_start();

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        if ($tipo != $row['grupo']) {
            if (!$z) {

                echo "</table></div>";
            }

            echo '<h4><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapsea' . $i . '"><span class="glyphicon glyphicon-eye-open"></span></button>'
            . '' . $row['grupo'] . '</h4>'
            . ' <div id="collapsea' . $i . '" class="collapse">';
            echo '<table class="table table-responsive table-striped table-bordered"><tr><th colspan="4">' . $row['grupo'] . '</th></tr>';
            $tipo = $row['grupo'];
            $i++;
            $z = FALSE;
        }
        echo "<tr><td>" . $row["idalimentos"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["presentacion"] . "</td><td>";
        if (isset($_SESSION['usuario'])) {
            echo "<button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-remove' onclick='eliminarAlimento(" . $row["idalimentos"] . ")'></span></button> ";
        }
        echo "</td></tr>";
    }
} else {
    echo "0 results";
}
echo "</table><div>";
$con->cerrarConexion();
?>