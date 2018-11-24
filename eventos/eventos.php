<?php
require_once './../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <style>
            body{
                background-image: url(../imagenes/restaurante.jpg);
                background-attachment: fixed;
                background-size: cover;
            }
            .principal{
                background-color: #047b75;
            }
            .secundario{
                background-color: #70b22d;
                color: white;
            }
            .relleno-espacio{
                width: 100%;
                height: 80px;
            }
            textarea{
                width: 100%;
            }

            #fi2{
                height: 450px;

                overflow-y: scroll;
            }
            .actualizar {
                display: none;
            }
            .container{
                background-color: white;
                box-shadow: 1px 3px 20px black;
            }
            .borde{
                padding: 10px;

            }
        </style>
        <script type="text/javascript">
            function actualizar(x, l, d) {
                var d1 = document.getElementById(x + l + l);
                var d2 = document.getElementById(x + l);
                if (d1.innerHTML != d2.value) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {

                        if (this.readyState == 4 && this.status == 200) {
                            alert(innerHTML = this.responseText);

                            location.reload();

                        }




                    };
                    xhttp.open("POST", "actualizar_registro_evento.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                    xhttp.send("id=" + x + "&d=" + d2.value + "&c=" + d);
                }
                d1.style = "display:block";
                d2.style = "display:none";
            }
            function verinput(x, l) {
                document.getElementById(x + l).style = "display:block";
                document.getElementById(x + l + l).style = "display:none";
            }
            function eliminar(dato) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        alert(innerHTML = this.responseText);
                        location.reload();
                    }
                };
                xhttp.open("GET", "eliminar_registro_evento.php?id=" + dato, true);
                xhttp.send();
            }

        </script>
        <title>Formulario de gestión de eventos</title>
    </head>
    <body>
        <?php
        require_once '../menu/menuTipologia.php';
        ?>
    </nav>
    <div class="relleno-espacio"></div>
    <div class="container">
        <div class="borde">
            <div class="row">

                <div class="border col-sm-3">
                    <form id="form1" action="<?php echo htmlspecialchars("guardar_registro_evento.php"); ?>"  class="form-group"  method="post" target="_self">
                        <label for="Evento">Nombre de la tipología</label><br>
                        <input class="form-control" id="Evento" placeholder="Evento" name="Evento"><br>
                        <label for="descripcion">Descripción</label><br>
                        <textarea class="form-control" id="descripcion" name="descripcion" class="10" rows="10" placeholder="No mayor a 1323 caracteres">
                        </textarea><br>
                        <label for="tipologia">Tipología</label>
                        <select id="tipologia" class="form-control" name="tipologia">
                            <?php
                            $option2 = "";
                            echo $s1 = "select idtipologia, tipologia from tipologia order by tipologia";
                            $r2 = $con->consulta($s1);
                            while ($row2 = $r2->fetch_row()) {
                                echo $option = '<option value="' . $row2[0] . '">' . $row2[1] . '</option>';
                                $option2 = $option2 . $option;
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn secundario">Guardar</button>
                    </form>
                </div>
                <div class="col-sm-1"></div>
                <div class="border col-sm-8">


                    <table border="1" class="table table-striped form-group" style="margin-top: 15px;margin-bottom: 1px;">
                        <thead>
                            <tr>
                                <th style="width:7%">ID</th>
                                <th style="width:25%">Evento</th>
                                <th style="width:33%">Descripción</th>
                                <th>Tipología</th>
                            </tr>
                        </thead>
                    </table>
                    <div id="fi2">
                        <table border="1" class="table table-striped form-group">

                            <tbody >
                                <?php
                                $r = $con->consulta("Select e.*,t.tipologia from tipo_evento e inner join tipologia t on e.idtipologia=t.idtipologia order by 1 desc");
                                while ($row = $r->fetch_row()) {
                                    echo '<tr>'
                                    . '<td style="width:7%">' . $row[0] . '</td>'
                                    . '<td style="width:25%"><label for="' . $row[0] . 'a" id="' . $row[0] . 'aa" onclick="verinput(' . $row[0] . ',\'a\')">' . $row[1] . '</label><input class="form-control actualizar" onblur="actualizar(' . $row[0] . ',\'a\',\'tipo_evento\')"  id="' . $row[0] . 'a" value="' . $row[1] . '"/></td>'
                                    . '<td style="width:40%"><label for="' . $row[0] . 'b  " id="' . $row[0] . 'bb" onclick="verinput(' . $row[0] . ',\'b\')">' . $row[2] . '</label><textarea class="form-control actualizar"  onblur="actualizar(' . $row[0] . ',\'b\',\'descripcion_tipo_evento\')"  id="' . $row[0] . 'b" >' . $row[2] . '</textarea></td>'
                                    . '<td><label for="' . $row[0] . 'c" id="' . $row[0] . 'cc" onclick="verinput(' . $row[0] . ',\'c\')">' . $row[4] . '</label><select class="form-control actualizar"  onblur="actualizar(' . $row[0] . ',\'c\',\'idtipologia\')"  id="' . $row[0] . 'c"  >' . $option2 . '</select></td>'
                                    . '<td><button type="button" title="Eliminar registro" onclick="eliminar(' . $row[0] . ')" class="btn btn-danger btn-sm">x</button></td>'
                                    . '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
<?php
$con->cerrarConexion();
?>