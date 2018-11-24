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
                        document.getElementById("Ingrediente").value="";
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
                <div class="panel panel-default">
                    <div class="panel-heading">Crear receta</div>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <form method="post" action="ingredientes/crearReceta.php" target="_self" enctype="multipart/form-data">
                                <div class="panel-heading"></div>
                                <div class="panel-body2">

                                    <div class="form-group">
                                        <label for="receta">Nombre de la receta:</label>
                                        <input type="text" class="form-control" name="nombre_receta" id="receta" style="text-transform: lowercase;" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="porciones">Número de porciones:</label>
                                        <input type="number" min="1" pattern="^[0-9]+" name="porciones" class="form-control" id="porciones" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="tipo_receta">Tipo de receta</label>

                                        <select name="tipo" class="form-control" id="tipo_receta">
                                            <option>Refrigerio</option>
                                            <option>Plato típico colombiano</option>
                                            <option>Menú de gala</option>
                                            <option>Menú buffet</option>
                                            <option>Menú a la mesa</option>
                                            <option>Comida árabe</option>
                                            <option>Plato principal res</option>
                                            <option>Plato principal maríscos</option>
                                            <option>Plato principal cerdo</option>
                                            <option>Plato principal aves</option>
                                            <option>Plato principal conejo</option>
                                            <option>Menú acompañamiento</option>
                                            <option>Menú postres</option>
                                            <option>Menú entradas frías y calientes</option>
                                            <option>Guarniciones arroz</option>
                                            <option>Guarniciones de papa</option>
                                            <option>Guarniciones de papa</option>
                                            <option>Guarniciones de pasta</option>
                                            <option>Guarniciones de ensalada</option>
                                            <option>Guarniciones de verdura</option>
                                            <option>Guarniciones de hortalizas</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                                    </div>


                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>

                                    <div class="panel-body2">
                                        <div id="listaIngredientes" style=" overflow-y: scroll;height: 158px; border: 1px solid #ccc;">
                                            Cargando lista...
                                        </div>


                                    </div>
                                    <div class="panel-body2 ">
                                        <br>
                                        <div class="form-group">

                                            <label for="Ingrediente">Ingrediente</label>
                                            <input type="text" placeholder="Sí no encuentra el ingrediente, creelo." class="form-control" id="Ingrediente">
                                        </div>
                                        <div class="form-group">
                                            <label for="unidad_medida">Unidad de medida</label>
                                            <input type="text"  class="form-control" id="unidad_medida">
                                        </div>

                                        <button type="button" onclick="agregar()" class="btn btn-default">Agregar a la lista</button>

                                    </div>
                                    <div class="panel-footer"></div>
                                </div>
                                <button type="submit" class="btn btn-success">Guardar Receta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="s2">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Consultar receta</div>
                <div class="panel-body" style="overflow: scroll;height: 315px;">
                    <?php
                    require './ingredientes/consultarRecetas.php';
                    ?>
                </div>
            </div>
        </div>
    </section>
<!--    <section id="s3">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar receta</div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </section>-->




</body>
</html>
