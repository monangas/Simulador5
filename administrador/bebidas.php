<?php
@session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administración</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/printThis.js" type="text/javascript"></script>
        <style>
            body{
                background-image: url(../imagenes/restaurante.jpg);
                background-attachment: fixed;
                background-size: cover;
            }
            section{
                width: 100%;
                /*border: 1px solid;*/
                padding-top: 55px;
            }

            .panel-body2{
                padding: 20px;
            }
            .listaIngredientes{
                overflow-y: scroll;
                height: 158px;
                border: 1px solid #ccc;
            }
            .superior {
                position: absolute;
                margin-left: -21px;
                background-color: #efecec;
                height: 24px;
                padding: 3px;
                border-radius: 0px 3px 4px 0px;
            }
            .badge1 {

                float: right;
                width: 0px;

            }
            .numero{
                float: right;
                border-radius: 5px;
                margin-left: 5px;
                border: 1px solid #ccc;
            }
            @media only screen and (max-width: 600px) {
                .modal {
                    font-size: 10px;
                }
                .form-control {
                    font-size: 9px;

                    width: 100%;
                    padding: 0px;
                }
                .numero{
                    width: 100px;
                }
                .btn-lg{

                }
                .btn-lg {
                    font-size: smaller;
                }
            }
        </style>

        <script>
            var altura;
            var ingre;
            var anchura;
            var um;
            $(document).ready(function () {

                tamanio();
                ajax(1);

            });
            $(document).resize(function () {
                tamanio();
            });
            function tamanio() {
                altura = $(document).height();
                anchura = $(document).width();
            }
            function agregar() {
                ingre = document.getElementById("Ingrediente").value;
                um = document.getElementById("unidad_medida").value;


                ajax(2);
            }
            function ajax(n) {
                var ruta = "";
                switch (n) {
                    case 1:
                        ruta = "ingredientes/listaCheckbox.php";
                        break;
                    case 2:
                        ruta = "ingredientes/crearIngrediente.php?i=" + ingre + "&u=" + um;
                        break;
                }
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("listaIngredientes").innerHTML = this.responseText;
                        document.getElementById("Ingrediente").value = "";
                    }
                };
                xhttp.open("GET", ruta, true);
                xhttp.send();
            }

        </script>
    </head>
    <body>

        <?php
        require_once '../menu/menuAdministrador.php';
        ?>



        <section id="s1">
            <div class="container">
                <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear bebidas</div>
                    <div class="panel-body  ">
                        <div class="panel panel-default ">

                            <form method="post" action="bebidas/crearBebidas.php" target="_self" enctype="multipart/form-data">
                                <div class="panel-heading"></div>
                                <div class="panel-body2">

                                    <div class="form-group">
                                        <label for="bebida">Nombre de la bebida:</label>
                                        <input type="text" class="form-control" name="bebida" id="bebida" style="text-transform: lowercase;" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="Presentacion">Presentación </label>
                                        <input type="text" min="1"  name="presentacion" class="form-control" id="presentacion" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="grupo">Grupo </label>
                                        <select  name="grupo" class="form-control" id="grupo" required="">
                                            <option>AYG - Aguas y Gaseosas</option>
                                            <option>CER - Cervezas</option>
                                            <option>EYE - Empacados y Envasados</option>
                                            <option>LIC - Licores</option>
                                            <option>VYC - Vinos y Champanas</option>

                                        </select>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success">Guardar bebida</button>
                            </form>



                        </div>
                        

                    </div>
                    
                </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel panel-default ">
                            <div class="panel-heading">Consultar bebidas</div>
                            <div class="panel-body" style="overflow: scroll;height: 368px;">
                                <?php
                                require './bebidas/consultarBebidas.php';
                                ?>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section id="s2">
        <div class="container">
            
        </div>
    </section>


</body>
</html>

