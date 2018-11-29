<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Módulo 3</title>
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
        <style>
            .navbar{
                background-color: #2b9fa0;
            }
            .nav a{
                color: white;
            }
        </style>
    <head>
    </head>
    <body>

        <nav class="navbar   navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"  style="color: white;">Simulador</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../index.php">Inicio</a></li>

                        <li><a href="../modulo1/index.php">Módulo 1</a></li>
                        <li><a href="../modulo2/index.php">Módulo 2</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Módulo 3<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="modulo32.php">Alimentos</a></li>
                                <li><a href="#">Costos</a></li>
                               

                            </ul>
                        </li>
                        
                        <li><a href="../modulo4/index.php">Módulo 4</a></li>

                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#" data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        <br>
        <br>
        <br>

        

        <?php
        require '../administrador/costo/costo.php';
        ?>





        <!-- ModalLogin -->
        <form action="../administrador/login.php" method="post" target="_self">
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
    </body>
</html>