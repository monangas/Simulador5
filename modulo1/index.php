<div id="logomoduno"><a href="http://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx"><img src="/img/logo_sennova.png" /></a></div>
<div id="logo_dosmoduno"><a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/img/logo_sena.png" /></a></div>
<!--<div id="footer"></div>-->



<html>

<head>
    <title>SCP Simulador-Planeaci&oacuten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    <link href="../css/index.css" rel="stylesheet" type="text/css" />

    <script>
        $(document).ready(function () {
            $('#tipologia').change(function () {
                var id = $('#tipologia').val();
                $('#des_tip').load('descripcion.php?id=' + id);
            });
        });
    </script>

    <script>
        $(function () {
            $(".sortable_list").sortable({
                connectWith: ".connectedSortable",
            }).disableSelection();
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#tipologias').change(function () {
                var con = $('#tipologias').val();
                console.log(con);

                $.ajax({
                        method: "post",
                        url: "error.php",
                        data: {
                            evento: con
                        }
                    })
                    .done(function (data) {
                        $(".pop").html(data);
                    });
            });
        });
    </script>
    <!--aparece monedin-->
    <script type="text/javascript">
        function Mostrar() {
            document.getElementById("monedin").style = "none";
        }
    </script>
    <script type="text/javascript">
        function Ocultar() {
            document.getElementById("monedin").style.display = "none";
        }
    </script>

    <script>
        $(document).ready(function () {
            $("#number").on({
                "focus": function (event) {
                    $(event.target).select();
                },
                "keyup": function (event) {
                    $(event.target).val(function (index, value) {
                        return value.replace(/\D/g, "")
                            .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                            .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
                    });
                }
            });
        });
    </script>
</head>

<body>
    <div id="monedin" style="visibility: hidden;">

        <img src="/gif/.gif" /><br>
        <audio id="holamonedin" src="/audio/hola1.mp3" controls></audio>
        <h6>¡Escuchame!</h6>
        <input id="botonmone" type="submit" value="Ocultar" onclick="Ocultar()" class="btn btn-primary">
    </div>
    <?php
        require_once '../menus/menuPrincipal.php';
        require_once '../conexion/conexionDB.php';
        ?>
    <br>
    <div class="container">
        <div class="panel panel-default panel1" style="height: 520px; overflow-y: scroll">
            <div id="modulo1_t1">
            <hr>
                <h1 class="tipografia-zurich" style="text-align:center">PLANEACIÓN</h1>
            </div>
            <hr>

           
    
        <div   class="container "  style="width:55%;
    border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius:20px;-o-border-radius: 20px;" >
                                          
                    <div  class="panel panel-default panel1  " style="height: 300px; overflow-y: scroll; text-align:center">
                        <hr>
                        <h4>DATOS DE PERSONA O EMPRESA QUE REALIZA EL EVENTO</h4>
                        
                         <table class="table">
                            <tr>
                                <th scope="row" class="tipografia-calibri">NOMBRE DE PERSONA O EMPRESA QUE ORGANIZA EL EVENTO</th>
                                <!--nombre de que-->
                                <td><input class="form-control" type="text" name="organizador" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">N° DE CEDULA O NIT</th>
                                <td><input class="form-control" type="number" name="identificacion1" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">TIPO DE EMPRESA</th>
                                
                                <td> <select id="sociedades" class="form-control mx-3" name="tipoempresa">
                                        <optgroup label="Creado por una persona">
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Persona
                                                natural comerciante</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedades
                                                por Acciones Simplificadas(S.A.S)</option>
                                        </optgroup>
                                        <optgroup label="Creada por dos o mas socios">
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                Colectiva</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                Anónima (S.A.)</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                de Responsabilidad Limitada (Ltda.)</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                en Comandita Simple (S. en C.) </option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                en Comandita por Acciones (S.C.A.)</option>
                                        </optgroup></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">RECIBIDA POR</th>
                                <!--nombre de que-->
                                <td><input class="form-control" type="text" name="RECIBIDA" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">FECHA DE SOLICITUD DEL EVENTO</th>
                                <td><input class="form-control" type="date" name="fecha" required></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">HORA SOLICITUD DEL EVENTO</th>
                                <td><input class="form-control" type="time" name="hora" required></td>
                            </tr>

                            </table>
                    </div>
        </div>            
               <br><br>
         <div  class="container " style="width:55%;
    border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius:20px;-o-border-radius: 20px;" >
                    <div  class="panel panel-default " style=" height: 50%; overflow-y: scroll; text-align:center">
                    <hr>
                        <h4>DATOS DEL CLIENTE PARA EL EVENTO</h4>
                        
                         <table class="table">
                         <tr>
                                <th scope="row" class="tipografia-calibri">EMPRESA QUE SOLICITA EL EVENTO</th>
                                <td><input class="form-control" type="text" name="responsable" required></td>
                         </tr>
                         <tr>
                                <th scope="row" class="tipografia-calibri">N° DE CEDULA O NIT</th>
                                <td><input class="form-control" type="number" name="identificacion2" required></td>
                         </tr>
                         <tr>
                                <th scope="row" class="tipografia-calibri">TIPO DE EMPRESA</th>
                                
                                <td> <select id="sociedades" class="form-control mx-3" name="tipoempresa">
                                        <optgroup label="Creado por una persona">
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Persona
                                                natural comerciante</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedades
                                                por Acciones Simplificadas(S.A.S)</option>
                                        </optgroup>
                                        <optgroup label="Creada por dos o mas socios">
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                Colectiva</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                Anónima (S.A.)</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                de Responsabilidad Limitada (Ltda.)</option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                en Comandita Simple (S. en C.) </option>
                                            <option value="" data-toggle="modal" data-target="#sociedades_modal" class="tipografia-calibri">Sociedad
                                                en Comandita por Acciones (S.C.A.)</option>
                                        </optgroup></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">NOMBRE DEL SOLICITANTE</th>
                                <td><input class="form-control" type="text" name="responsablesolicita" required></td>
                         </tr>
                         <tr>
                                <th scope="row" class="tipografia-calibri">CARGO DEL SOLICITANTE</th>
                                <td><input class="form-control" type="text" name="cargoresponsable" required></td>
                         </tr>  
                         <tr>
                                <th scope="row" class="tipografia-calibri">DIRECCIÓN</th>
                                <td><input class="form-control" type="text" required></td>
                        </tr>
                        <tr>
                                <th scope="row" class="tipografia-calibri">CELULAR O TELEFONO</th>
                                <td><input class="form-control" type="number" required></td>
                        </tr>
                        <tr>
                                <th scope="row" class="tipografia-calibri">EMAIL</th>
                                <td><input class="form-control" type="email" required></td>
                            </tr>
                         </table>
                </div>
          </div>
          <br><br>
          <div   class="container "  style="width:55%;
    border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius:20px;-o-border-radius: 20px;">
            <div  class="panel panel-default " style=" height: 50%; overflow-y: scroll; text-align:center">   
                <hr>
                  <h4>DATOS DEL EVENTO</h4>
                  <table class="table">
                  <tr>
                        <th scope="row" class="tipografia-calibri">Fecha evento</th>
                        <td><input class="form-control" type="date" name="fechaevento" required></td>
                 </tr>
                 <tr>
                                <th scope="row" class="tipografia-calibri">Hora</th>
                                <td><input class="form-control" type="time" name="hora" required></td>
                 </tr>
                 <tr>
                                <th scope="row" class="tipografia-calibri">Hora</th>
                                <td><input class="form-control" type="time" name="hora" required></td>
                 </tr>
                 <tr>
                                <th scope="row" class="tipografia-calibri">CIUDAD DEL EVENTO</th>
                                <td><input class="form-control" type="text" name="ciudad" required></td>
                </tr>
                <tr>
                                <th scope="row" class="tipografia-calibri">MUNICIPIO O BARRIO DEL EVENTO</th>
                                <td><input class="form-control" type="text" name="muni" required></td>
                </tr>
                <tr>
                                <th scope="row" class="tipografia-calibri">Tipo de evento</th>
                                <td>
                                    <select id="tipologias" class="form-control" name="tipologia" required>
                                        <option value="" class="tipografia-calibri">Seleccione:</option>
                                        <?php
                                        $query = $mysqli->query("SELECT idtipologia, tipologia FROM tipologia");
                                        while ($rows = $query->fetch_assoc()) {
                                            echo '<option value="'.$rows['tipologia'].'" required>'.$rows['tipologia'].'</option>';
                                        }
                                    ?>

                                    
                                    </select>
                                </td>
                </tr>
                <tr>
                <th>
                    <p class="tipografia-calibri">Selecciona el tipo de evento del cual quieres aprender:</p>
                     <div class="form-inline mb-2"> 
                        <label for="" class="tipografia-calibri"></label>
                        <select id="tipologia" name="hola" class="form-control mx-3" required>
                            <option value="" class="tipografia-calibri">Seleccione:</option>
                            <?php
                            $query = $mysqli->query("SELECT idtipologia, tipologia FROM tipologia");
                            while ($rows = $query->fetch_array()) {
                                echo '<option value="'. $rows['idtipologia'] .'">'.$rows['tipologia'].'</option>';
                            }
                        ?>
                        </select>
                        <!-- <button class="btn btn-primary" class="tipografia-calibri">Select</button> -->
                     </div> </th>
                <td>
                <div class="col-md-8">
                    <textarea readonly class="form-control" id="des_tip" rows="4"></textarea>
                </div>
                </td>
                </tr>
                <tr>
                            <th>
                <hr>

<p class="tipografia-calibri">Seleccione un evento y los requerimientos necesarios:</p>
<!-- generate clasificacion checkbox, use of the [] cause php treat it like an array -->
<div class="row">
    <div class="card col-md-4 ml-3 py-3 sortable_list connectedSortable">


        <select id="tipologias" name="evento" class="form-control" required>
            <option value="" class="tipografia-calibri">Seleccione:</option>
            <?php
                        $query = $mysqli->query("SELECT idtipologia, tipologia FROM tipologia");
                        while ($rows = $query->fetch_assoc()) {
                            echo '<option value="'.$rows['tipologia'].'">'.$rows['tipologia'].'</option>';
                        }
                    ?>
        </select>
        </th>
        <td>
        <?php
        $query = $mysqli->query("SELECT idclasificacion,clasificacion FROM clasificacion");
        while ($rows = $query->fetch_array()) {
            echo'<div class="list-group-item checkbox"  id='.$rows['idclasificacion'].'>
                        
                        <label id="label1">
                        <input type="checkbox" name="requerimiento[]" id="check" value="'.$rows['clasificacion'].'">'.$rows['clasificacion'].'
                         </label>
                      
                </div>';
            }
    ?>
        
</form>

</div>

<div class="card col-md-4 ml-3 py-3 sortable_list connectedSortable"></div>

</div>

<hr>
<p class="pop"></p>

<hr>

<?php


if (isset($_POST['ingresar'])){
    $con=$_POST['evento'];
    echo $con;            
    //extrae los requerimiento seleccionados en forma de string, notar que requerimiento va sin []
    if (isset($_POST['requerimiento'])){                
    $requerimientos = implode ( ',', $_POST['requerimiento']);
   // echo $requerimientos;
    }else {
        echo'no ha selecionado ningun requerimiento para su evento';
    }        


    $query = $mysqli->query("SELECT requerimientos FROM tipologia where tipologia='$con'");
    $rows = $query->fetch_array();            
    if(isset ($requerimientos)){
        if($requerimientos==$rows['requerimientos']){
        echo 'Los requerimientos son los correctos';
        }else{
        echo 'Esos no son los requerimientos, intentalo de nuevo';
        }
    }
}
?>
</td>
                </tr>
                <tr>
                                <th scope="row" class="tipografia-calibri">Asistentes</th>
                                <td><input class="form-control" name="asistentes" type="number" min="1" required></td>
                </tr>
                <tr>
                                <th scope="row" class="tipografia-calibri">Montaje salon</th>
                                <td><select name="montaje" id="montajes" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        <option value="Montaje imperial">Montaje imperial</option>
                                        <option value="Montaje en T">Montaje en T</option>
                                        <option value="Montaje coctel">Montaje coctel</option>
                                        <option value="Montaje U o herradura">Montaje U o herradura</option>
                                        <option value="Montaje en V">Montaje en V</option>
                                        <option value="Montaje auditorio">Montaje auditorio</option>
                                        <option value="Montaje escuela">Montaje escuela</option>
                                        <option value="Montaje conferencia">Montaje conferencia</option>
                                        <option value="Montaje corazón">Montaje corazón</option>
                                        <option value="Montaje ruso">Montaje ruso</option>
                                        <option value="Montaje banquete">Montaje banquete</option>
                                        <option value="Montaje collar">Montaje collar</option>
                                        <option value="Montaje en E">Montaje en E</option>
                                        <option value="Montaje espiga">Montaje espiga</option>
                                        <option value="Montaje junta directiva">Montaje junta directiva</option>
                                        <option value="Montaje medialuna">Montaje medialuna</option>
                                        <option value="Montaje ovalado">Montaje ovalado</option>
                                        <option value="Montaje trébol">Montaje trébol</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">OBSERVACIONES</th>
                                <td><input class="form-control" type="text"></td>
                            </tr>
                            <tr>
                                <th scope="row" class="tipografia-calibri">Presupuesto asignado para el evento</th>
                                <td>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </td>
                            </tr>
                 </table>
                 <button class="btn btn-primary" type="submit" name="ingresar" class="tipografia-calibri" value="Mostrar"
            onclick="Mostrar()">Ingresar</button><br>
            </div>
     <br>
     </div>
     <br>
</html>