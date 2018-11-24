<?php

@session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:../index.php");
}
?>
<script>
    function actualizar(doc) {
        $("#documento" + doc).show();
        $("#pnombre" + doc).show();
        $("#snombre" + doc).show();
        $("#papellido" + doc).show();
        $("#sapellido" + doc).show();
        $("#activo" + doc).show();
        $("#r" + doc).show();
        $(".o" + doc).hide();
        // document.getElementById(actualizar)
        $("#actualizar" + doc).attr("onclick", "actu('" + doc + "')");

    }

    function actu(doc) {
        $("#documento" + doc).hide();
        $("#pnombre" + doc).hide();
        $("#snombre" + doc).hide();
        $("#papellido" + doc).hide();
        $("#sapellido" + doc).hide();
        $("#activo" + doc).hide();
        $("#r" + doc).hide();
        $(".o" + doc).show();
        $("#cargando").show();

        var d = $("#documento" + doc).val();
        var pn = $("#pnombre" + doc).val();
        var sn = $("#snombre" + doc).val();
        var pa = $("#papellido" + doc).val();
        var sa = $("#sapellido" + doc).val();
        var a = $("#activo" + doc).val();
        var r = $("#r" + doc).val();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                b = this.responseText;
                setTimeout(function () {
                    location.reload();
                }, 3000);


            }
        };

        xhttp.open("GET", "actualizarUsuario.php?d=" + d + "&pn=" + pn + "&sn=" + sn + "&pa=" + pa + "&sa=" + sa + "&a=" + a + "&r=" + r, true);
        xhttp.send();

    }

    function eliminar(doc) {
        if (confirm("En realidad quiere eliminar el usuario " + doc)) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == 1) {
                        window.open("crearUsuarios.php", "_self");
                    }

                }
            };
            xhttp.open("GET", "eliminarUsuario.php?doc=" + doc, true);
            xhttp.send();

        }
    }
</script>
<style>
    .ocultar{
        display: none;
        width: 100%;
    }
    #cargando{
        position: absolute;
        width: 73%;
        height: 231px;
    }
    @media only screen and (max-width: 600px) {
                table {
                    font-size: 10px;
                }
                .form-control {
                    font-size: 9px;

                    width: 100%;
                    padding: 0px;
                }
                
            }
</style>
<?php

require_once '../../conexion/conexion1.php';

$con = new conexion();
$con->conexion();
$r = $con->consulta("select * from persona");
?>
<img src="../../gif/cargando.gif" class="ocultar" id="cargando" alt="cargando..."/>
<table class="table table-striped table-responsive">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Primer nombre</th>
            <th>Segundo nombre</th>
            <th>Primer apellido</th>
            <th>Segundo apellido</th>
            <th>Rol</th>
            <th>¿Activo?</th>
            <th>fecha de activación</th>
            <th>Gestión</th>

        </tr>
    </thead>
    <?php

    $i111 = 0;
    while ($rows = $r->fetch_array()) {
        echo '<tr>'
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['documento'] . '</span><input type="text" id="documento' . $rows['documento'] . '" class="ocultar" value="' . $rows['documento'] . '"/></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['primer_nombre'] . '</span><input type="text" id="pnombre' . $rows['documento'] . '" class="ocultar" value="' . $rows['primer_nombre'] . '"/></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['segundo_nombre'] . '</span><input type="text" id="snombre' . $rows['documento'] . '" class="ocultar" value="' . $rows['segundo_nombre'] . '"/></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['primer_apellido'] . '</span><input type="text" id="papellido' . $rows['documento'] . '" class="ocultar" value="' . $rows['primer_apellido'] . '"/></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['segundo_apellido'] . '</span><input type="text" id="sapellido' . $rows['documento'] . '" class="ocultar" value="' . $rows['segundo_apellido'] . '"/></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['rol'] . '</span><select id="r' . $rows['documento'] . '" class="ocultar"><option>Administrador</option><option>Estandar</option></select></td> '
        . '<td><span class="o' . $rows['documento'] . '">' . $rows['activo'] . '</span><select id="activo' . $rows['documento'] . '" class="ocultar"><option>si</option><option>no</option></select></td> '
        . '<td>' . $rows['fecha_actividad'] . "</td> "
        . '<td>' .
        '<button class="btn btn-primary" id="actualizar' . $rows['documento'] . '" onclick="actualizar(\'' . $rows['documento'] . '\')"><span class="glyphicon glyphicon-pencil"></span></button>';

        if (!$i111 == 0) {
            echo '<button class="btn btn-danger" onclick="eliminar(\'' . $rows['documento'] . '\')"><span class="glyphicon glyphicon-trash"></span></button>';
        }
        echo '</td> '
        . '</tr>';
        $i111++;
    }
    ?>

