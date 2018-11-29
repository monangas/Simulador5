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
                    <div class="panel-heading">Consultar bebidas</div>
                    <div class="panel-body" style="overflow: scroll;height: 315px;">
                        <?php
                        require '../administrador/ingredientes/consultarRecetas.php';
                        ?>
                    </div>
                </div>
         
        </div>
    </div>
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
</div>