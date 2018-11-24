<?php
@session_start();
if(!isset($_SESSION['usuario'])){
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
                background-image: url(../../imagenes/restaurante.jpg);
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
    </head>
        <?php
        require_once '../../menu/menuCreaUsuarios.php';
        ?>
    <br>
    <br>
    <br>
    <br>
    <section id="s1">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Registro usuarios</div>
                <div class="panel-body">

                   <?php require_once './registroUsuarios.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <section id="s2">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios regsitrados</div>
                <div class="panel-body">

                   <?php require_once './usuariosRegistrados.php'; ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
