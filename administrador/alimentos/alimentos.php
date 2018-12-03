<div class="container">
    <div class="row">
        <div id="s2" class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">Consultar receta</div>
                <div class="panel-body" style="overflow: scroll;height: 315px;">
                    <?php
                    require '../administrador/ingredientes/consultarRecetas.php';
                    ?>
                </div>
            </div>

        </div>
        <div id="s3" class="col-sm-6">

            <div class="panel panel-default">
                <div class="panel-heading">Consultar bebida estandar</div>
                <div class="panel-body" style="overflow: scroll;height: 315px;">
                    <?php
                    require '../administrador/bebidas/consultarBebidaEstandar.php';
                    ?>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModalFichaTecnica">Ficha Técnica Inventarios</button>
        <div id="myModalFichaTecnica" class="modal fade" role="dialog">
            <div class="modal-dialog ">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ficha Técnica Inventarios</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <?php
                            include 'alimentos/ficha/ftinventario.php';
                            ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <section id="seccion1">

            <div class="panel panel-default">
                <div class="panel-heading" >Matriz inventario bebidas</div>
                <div class="panel-body">
                    <div class="panel panel-default">

                        <?php
                        @include '../bebidas/consultarBebidas.php';
                        @include '../administrador/bebidas/consultarBebidas.php';
                        ?>

                    </div>
                </div>
            </div>


        </section>
    </div>


    <div class="row">
        <section id="seccion1">

            <div class="panel panel-default">
                <div class="panel-heading" >Matriz inventario alimentos</div>
                <div class="panel-body">
                    <div class="panel panel-default">

                        <?php
                        @include '../alimentos/consultarAlimentos.php';
                        @include '../administrador/alimentos/consultarAlimentos.php';
                        ?>

                    </div>
                </div>
            </div>


        </section>
    </div>
</div>