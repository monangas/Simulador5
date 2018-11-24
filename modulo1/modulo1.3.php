<html>

<head>
    <title>SCP Simulador-Planeaci&oacuten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="../css/index.css" rel="stylesheet" type="text/css" />
    <!--ejecutar modal-->
    <style>
    .footer {position: fixed; bottom: 0;width: 100%;background-color:rgba(25, 61, 55, 0.7); text-align:center;
}   .btn {background-color: #ddd;border: none;color: black;padding: 10px 26px;text-align: center;font-size: 9px;
    margin: 4px 2px;transition: 0.3s;
  }
  .btn:hover { background-color: #3e8e41;color: white;
  }
    </style>
    <script>
      $(document).ready(function()
      {
         $("#myModal").modal("show");
      });
    </script>
    <script>
        $(document).ready(function () {
            $('#marco').change(function () {
                var id = $('#marco').val();
                $('#des_mar').load('des_mar.php?id=' + id);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#sociedades').change(function () {
                var id = $('#sociedades').val();
                $('#des_soc').load('des_soc.php?id=' + id);
            });
        });
    </script>

</head>

<body>
    <?php
        require_once '../menus/menuPrincipal.php';
        require_once '../conexion/conexionDB.php';
        ?>
    <br>
    <div class="container">
        <div class="panel panel-default panel1" style="height: 515px; overflow-y: scroll">
            <h1 class="text-center">Tipo empresa Usuario</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">creada por una persona</h2>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1"  data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Persona natural comerciante</label>
                    </div>
                
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Sociedades por Acciones Simplificadas
                            (S.A.S)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">creada por dos o mas socios</h2>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">Sociedad Colectiva</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio5" name="customRadio" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio5">Sociedad Anónima (S.A.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio6" name="customRadio" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6">Sociedad de Responsabilidad Limitada
                            (Ltda.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio7" name="customRadio"data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7">Sociedad en Comandita Simple (S. en C.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio8" name="customRadio" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio8">Sociedad en Comandita por Acciones
                            (S.C.A.)</label>
                    </div>
                </div>
            </div>
            <hr>
            <h1 class="text-center">Tipo empresa cliente</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">creada por una persona</h2>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio9" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio9">Persona natural comerciante</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio10" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio10">Empresa unipersonal</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio11" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio11">Sociedades por Acciones Simplificadas
                            (S.A.S)</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">creada por dos o mas socios</h2>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio12" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio12">Sociedad Colectiva</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio13" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio13">Sociedad Anónima (S.A.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio14" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio14">Sociedad de Responsabilidad Limitada
                            (Ltda.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio15" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio15">Sociedad en Comandita Simple (S. en C.)</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio16" name="customRadio1" data-toggle="modal" data-target="#sociedades_modal" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio16">Sociedad en Comandita por Acciones
                            (S.C.A.)</label>
                    </div>
                </div>
            </div>

           


 <div class="modal fade" id="sociedades_modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tipos de Sociedades</h4>
         
        </div>
        <div class="modal-body">
          
                <label for="">Bucas el tipo de sociedad que seleccionaste</label>
                <form class="form-inline mb-2">
                <select id="sociedades" class="form-control mx-3">
                    <option value="0">Seleccione:</option>
                    <?php
                            $query = $mysqli->query("SELECT id_soc, sociedades FROM sociedades");
                            while ($rows = $query->fetch_array()) {
                                echo '<option value="' . $rows['id_soc'] . '">' . $rows['sociedades'] . '</option>';
                            }
                            ?>
                </select>
            </form>
            <hr>
            <div class="col-md-8">
                <textarea  readonly class="form-control col-xs-12" rows="13  " id="des_soc" rows="4"></textarea>
               <hr> 
               <div align="center"> <H3>Sociedades</H3>
            
            <h4>Tipos de Sociedades y sus diferencias (Ltda., S.A., Comanditas, S.A.S., Colectivas)</h4>
            
            <p>Existen distintos entes societarios, cada uno con características particulares en aspectos fiscales, responsabilidades de sus accionistas o socios, su forma de constitución, transformación y disolución, etc. De dicha diferencia, cada empresario determinará cuál es la que más le conviene. Cada sociedad mercantil tiene una forma distinta de constituir, de transformarse, de conformar su patrimonio, la responsabilidad de sus dueños, etc., por ello y por solicitud de muchos usuarios, aquí un breve paralelo:</p>
            </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
              
         
    
         
         
         <hr>           
<!--ventana emergente-->
            <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" >Marco Legal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                    <p>Seleccione el marco legal</p>
            <form class="form-inline mb-2">
                
                <select id="marco" class="form-control mx-3">
                    <option value="0">Seleccione:</option>
                
                    <?php
                            $query = $mysqli->query("SELECT idmarco, marco FROM marco");
                            while ($rows = $query->fetch_array()) {
                                echo '<option value="' . $rows['idmarco'] . '">' . $rows['marco'] . '</option>';
                            }
                            ?>
                </select>
            </form>
            <hr>
            <div class="col-md-8">
                
                <textarea readonly class="form-control col-xs-12" rows="13  "  id="des_mar" rows="4"></textarea>
            </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

</div>
    </div>
    <!--<img id="avatar" src="../gif/profesor-01.gif" alt="" />-->
    <!---footer--->
    <div class="footer " style="color:white">¿Se te olvido? Repasa de nuevo el-->
      <div class="btn-group dropup">
      <button class="btn " data-toggle="modal" data-target="#myModal">Marco legal</button>
</div>
  </div>

</body>

</html>