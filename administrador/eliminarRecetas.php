<?php
@session_start();
if(!isset($_SESSION['usuario'])){
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administrador</title>
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
            .cargando{
                position: absolute;
                width: 100%;
                display: none;
                top: -167px;
            }
        </style>
    </head>
    <body>
        <?php
        require_once '../menu/menuEliminar.php';
        ?>
        <br>
        <br>
        <br>
        <br>

        <section id="s3">
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">Actualizar receta</div>
                    <div class="panel-body">


                        <?php
                        include_once '../conexion/conexion1.php';
                        $con = new conexion();
                        $con->conexion();

                        $tipo = "";
                        $z = 0;
                        $r = $con->consulta("SELECT * FROM `receta` ORDER BY `receta`.`tipo` DESC");
                        while ($rows = $r->fetch_array()) {

                            if ($tipo != $rows['tipo']) {
                                echo '<br>';
                                echo $tipo = $rows['tipo'];
                                echo '<br>';
                            }
                            echo '<button type="button" onclick="eliminarReceta(\'' . $rows['idreceta'] . '\',\'' . $rows['nombre'] . '\')" class="btn btn-danger btn-lg "><img src="../' . $rows['imagen'] . '" class="rounded" alt="' . $rows['nombre'] . '" width="200px" height="100px"><br>' . $rows['nombre'] . '</button>';
                        }



                        $con->cerrarConexion();
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <script>
            function eliminarReceta(a, b) {

                if (confirm("¿en verdad quiere eliminar la receta? " + b)) {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("men").innerHTML = this.responseText;
                        }
                    };
                    xhttp.open("GET", "ingredientes/eliminarReceta.php?c=" + a, true);
                    xhttp.send();
                }
                $(".cargando").css("display","block");
                setTimeout(function(){ window.open("eliminarRecetas.php","_self"); }, 2000);
            }
        </script>
        
        <img class="cargando" src="../gif/cargando.gif" alt=""/>
       
    </body></html>
