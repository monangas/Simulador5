<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="../css/index.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
</head>
<body>
    <div id="logomoduno"><a href="http://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx"><img src="/img/logo_sennova.png"/></a></div>
            <div id="logo_dosmoduno"><a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/img/logo_sena.png"/></a></div>
            <!--<div id="footer"></div>-->
            <div id="monedin"><img src="/gif/Monedin_Saludo.gif"/></div>

    <?php
        require_once '../menus/menuPrincipal.php';
        require_once '../conexion/conexionDB.php';
    ?>

    <div id="imp" class="">
        <div id="imprime" class="panel panel-default panel1" style="height: 600px; overflow-y: scroll">
            <h2  class="tipografia-zurich text-center" >PORTAFOLIO DE TRABAJO - OPC TIPO EMPRESA</h2>
            <!-- style="display: block"<input readonly type="text" > -->
            
            <hr>
            <input type="button" value="imprimir" onclick="window.print('imp')" >
            <table class="table">
                <tr>
                    <th class="tipografia-calibri">Tipolog&iacutea del Evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['tipologia']?>"></td>
                </tr>
                
                <tr>
                    <th class="tipografia-calibri">N&uacutemero de Asistentes:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['asistentes']?>"></td>
                </tr>
                
                <tr>
                    <th class="tipografia-calibri">Fecha del Evénto:</th>                    
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['fechaevento']?>"></td>
                </tr>
                    
                <tr>
                    <th class="tipografia-calibri">Hora del Evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['hora']?>"></td>
                </tr>
                
                <tr>
                    <th class="tipografia-calibri">Ciudad (Municipio, Vereda) Evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['ciudad']?>"></td>
                </tr>
                    
                <tr>
                    <th class="tipografia-calibri">Organizador del Evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['organizador']?>"></td>
                </tr>
                
                <tr>
                    <th class="tipografia-calibri">Responsable del evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['responsable']?>"></td>
                </tr>
                    
                <!-- <tr>
                    <th class="tipografia-calibri">Locaci&oacuten del Evento:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['locacion']?>"></td>
                </tr> -->
                <tr>
                    <th class="tipografia-calibri">Tipo de Empresa:</th>
                    <td><input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['tipoempresa']?>"></td>
                </tr>
                
                <tr>
                    <th class="tipografia-calibri">Presupuesto asignado para el evento:</th>
                    <td>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                        <input readonly type="text" class="form-control" name="" id="" value="<?php echo $_POST['presupuesto']?>">
                        </div>
                    </td>
                </tr>
            </table>
            
            <?php
                
                
                if (isset($_POST['ingresar'])){
                    $con=$_POST['evento'];
                    echo 'El evento seleccionado fue ';
                    echo $con;
                    echo ', los requerimientos que escogiste para el evento son';
                    echo'<br>';
                    //extrae los requerimiento seleccionados en forma de string, notar que requerimiento va sin []
                    if (isset($_POST['requerimiento'])){                
                    $requerimientos = implode ( ',', $_POST['requerimiento']);
                    echo $requerimientos;
                    }else {
                        echo'no ha seleccionado ningún requerimiento para su evento';
                    }        
            
                    echo'<br>';
                    $query = $mysqli->query("SELECT requerimientos FROM tipologia where tipologia='$con'");
                    $rows = $query->fetch_array();            
                    if(isset ($requerimientos)){
                        if($requerimientos==$rows['requerimientos']){
                        echo 'Esos son los requerimientos básicos del evento';
                        }else{
                        echo 'Esos no son los requerimientos básicos del evento';
                        }
                    }
            }
            ?>
        
</body>
</html>


