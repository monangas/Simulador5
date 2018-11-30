<?php
@session_start();
?> 
<style>
    .navbar{
        background-color: #2b9fa0;
    }
    .nav a{
        color: white;
    }
    .icon-bar{
        background-color: white;
    }
</style>
<nav class="navbar   navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#" style="color: white;">Simulador</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../index.php">Inicio</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestión Recetario<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../administrador/a.php">Crear recetas</a></li>
                        <li><a href="../administrador/a.php">Consultar recetas</a></li>
                        <li><a href="../administrador/eliminarRecetas.php">Eliminar recetas</a></li>
                        <li><a href="../administrador/bebidas.php">Bebidas y Alimentos</a></li>
                    </ul>
                </li>
                <li><a href="../tipologia/tipologia.php">Tipología</a></li>
                <li><a href="../eventos/eventos.php">Eventos</a></li>
                <li><a href="../administrador/usuarios/crearUsuarios.php">Gestión usuarios</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administración Costos<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../administrador/alimentos.php">Consultar Bebidas y Alimentos</a></li>
                        <li><a href="../administrador/costo.php">Costos</a></li>


                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Bienvenido <span style="color: orange;"><?php echo $_SESSION['usuario']; ?></span></a></li>
                <li><a href="../administrador/cerrar_sesion.php"><span class="glyphicon glyphicon-log-in"></span> 
                        <?php
                        @session_start();
                        if (isset($_SESSION['usuario'])) {
                            echo 'Cerrar sesión';
                        }
                        ?>
                    </a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- ModalLogin -->
<form action="administrador/login.php" method="post" target="_self">
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ingreso</h4>
                </div>
                <div class="modal-body">


                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" name="usuario" class="form-control" id="usuario">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn secundario" >Cancelar</button>
                    <button type="submit" class="btn terciario" >Entrar</button>
                </div> 
            </div> 

        </div> 
    </div> 
</form>