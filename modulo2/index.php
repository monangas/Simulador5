<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="../css/index.css" rel="stylesheet" type="text/css" />

    <script>
        function insert_Row() {
            var xTable=document.getElementById('table');
            var index = xTable.rows.length - 8;
            var tr = xTable.insertRow(index);
            tr.innerHTML = "<td colspan=1><input type='text' name='parts[]' class='form-control' > </td><td><input type='text' name='price[]' class='form-control' ></td>" ;
        };
    </script>

    <script>
        $('#table').on( 'click', 'tr .delete', function () {
        $(this).closest('tr').fadeOut("slow", function(){
            $(this).remove();
        })
    } );
    </script>

    <script>
        function insert_Ro(button)
{
    var xTable=document.getElementById('table');
    var body = xTable.tBodies[0]
    var rows = body.rows
    
    // pick the last and prepend
    rows[rows.length - 8].insertAdjacentHTML('beforebegin', "<tr><td><input type='number' min='0' class='form-control'></td><td><div class='input-group mb-0'><div class='input-group-prepend'><span class='input-group-text'>$</span></div><input name='presupuesto' id='number' min='1' required class='form-control' aria-label='Amount (to the nearest dollar)'></div></td><td><div class='input-group mb-0'><div class='input-group-prepend'><span class='input-group-text'>$</span></div><input name='presupuesto' id='number' min='1' required class='form-control' aria-label='Amount (to the nearest dollar)'></div></td></tr>")
}
    </script>

    <script>
        $('button[name=erase]').on('click', function() {
  $(this).closest("tr").remove();
})
    </script>

    <script>
        $('button[name=add]').on('click', function() {
  // this will select the first tr parent that contain the button
  var cloned = $(this).closest('tr').clone(true);

  $('#table1').append(cloned);
})
    </script>
</head>

<body>
    <?php
        require_once '../menus/menuPrincipal.php';
        require_once '../conexion/conexionDB.php';
        ?>
    <br>
    <div class="container">
        <div class="panel panel-default panel1" style="height: 600px; overflow-y: scroll">
            <hr>
            <h4 align="center">Elige todos los requerimiento que vas a necesitar para tu evento</h4>
            <hr>
            <table class="table table-bordered table-hover" id="table1">
                <thead>
                    <tr>
                        <th>REQUERIMIENTO</th>
                        <th>TIPO</th>
                        <th>CANTIDAD</th>
                        <th>VALOR UNITARIO</th>
                        <th>VALOR TOTAL</th>
                    </tr>
                </thead>
                <tr>
                    <td>Locación</td>
                    <td><select name="" id="" class="form-control">
                            <option value="">AEROPUERTO</option>
                            <option value="">AUDITORIO</option>
                            <option value="">AVION</option>
                            <option value="">BAR</option>
                            <option value="">BARCO</option>
                            <option value="">BIBLIOTECA</option>
                            <option value="">BOLERA</option>
                            <option value="">CABAÑA</option>
                            <option value="">CAMPO GOLF</option>
                            <option value="">CANCHA DE FUBTOL</option>
                            <option value="">CASA CAMPESTRE</option>
                            <option value="">CASINO</option>
                            <option value="">CASTILLO</option>
                            <option value="">CENTRO COMERCIAL </option>
                            <option value="">CENTRO DE CONVENCIONES</option>
                            <option value="">CENTRO DE EXPOSICION</option>
                            <option value="">CENTRO UNIVERSITARIO</option>
                            <option value="">CHIVA</option>
                            <option value="">CLAUSTRO</option>
                            <option value="">CLUB SOCIAL</option>
                            <option value="">COLISEO</option>
                            <option value="">CONCESINARIOS</option>
                            <option value="">DISCOTECA</option>
                            <option value="">FINCA</option>
                            <option value="">GALERIA </option>
                            <option value="">GIMNASIO</option>
                            <option value="">HOTEL</option>
                            <option value="">IGLESIA</option>
                            <option value="">JARDIN BOTANICO</option>
                            <option value="">KARTODROMO</option>
                            <option value="">MALECON</option>
                            <option value="">MINA DE SAL</option>
                            <option value="">MUSEO</option>
                            <option value="">NOTARIA</option>
                            <option value="">PARQUEADERO</option>
                            <option value="">PARQUES</option>
                            <option value="">PISTA DE CARROS</option>
                            <option value="">PISTA DE COLEO</option>
                            <option value="">PISTA DE MOTOS</option>
                            <option value="">PISTA PAINTBALL</option>
                            <option value="">PLAYA</option>
                            <option value="">PLAZA DE TOROS</option>
                            <option value="">POSADA</option>
                            <option value="">RESERVA NATURAL</option>
                            <option value="">RESTAURANTE</option>
                            <option value="">SALA DE JUNTA</option>
                            <option value="">SALON COMUNAL</option>
                            <option value="">SALON EVENTO</option>
                            <option value="">SALON HOTEL</option>
                            <option value="">SPA</option>
                            <option value="">TEATRO</option>
                            <option value="">TERRAZAS</option>
                            <option value="">TRANVIA</option>
                            <option value="">TREN</option>
                            <option value="">VIÑEDO</option>
                            <option value="">YATE</option>
                            <option value="">OTROS</option>                            
                        </select>
                        <button name="add">+</button>
                        <button name="erase">-</button>
                        </td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Facilidades técnicas</td>
                    <td><select name="" id="" class="form-control">
                            <option value="">APUNTADOR LASER</option>
                            <option value="">ARAÑAS (TELE CONFERENCIAS)</option>
                            <option value="">BAFLES</option>
                            <option value="">CABINAS INSONORIZADAS</option>
                            <option value="">CABLE HDMI (High-Definition Multimedia Interface)</option>
                            <option value="">CAMARA DE VIDEO</option>
                            <option value="">CIRCUITO CERRADO DE TELEVISION</option>
                            <option value="">COMPUTADORES</option>
                            <option value="">EQUIPOS DE GRABACION Y AUDIO</option>
                            <option value="">EQUIPOS DE SONIDO</option>
                            <option value="">EQUIPOS DE TRADUCCION SIMULTANEA</option>
                            <option value="">EXTENCIONES ELECTRICAS</option>
                            <option value="">FAX</option>
                            <option value="">FOTOCOPIADORA</option>
                            <option value="">FUENTE DE ALIMENTACION ELECTRICA</option>
                            <option value="">IMPRESORAS</option>
                            <option value="">MICROFONOS ALAMBRICOS</option>
                            <option value="">MICROFONOS DE SOLAPA</option>
                            <option value="">MICROFONOS INALAMBRICOS</option>
                            <option value="">MONITORES DE AUDIO Y VIDEO</option>
                            <option value="">PANTALLAS</option>
                            <option value="">PLANTA ELECTRICA</option>
                            <option value="">PROYECTORES</option>
                            <option value="">RADIOS DE COMUNICACION</option>
                            <option value="">REGLETA MULTICONTACTOS</option>
                            <option value="">REPRODUCTORES DE VIDEO</option>
                            <option value="">SEMAFORO</option>
                            <option value="">SEÑALIZADOR</option>
                            <option value="">SISTEMA DE ILUMINACION</option>
                            <option value="">SISTEMA WATCHOUT</option>
                            <option value="">SISTEMAS DE VIDEO CONFERENCIA</option>
                            <option value="">TRIPODE</option>
                        </select>
                        <button name="add">+</button>
                        <button name="erase">-</button>
                    </td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Mobiliario</td>
                    <td><select name="" id="" class="form-control">
                            <optgroup label="Manteleria">
                                <option value="">Mantel tablón blanco en lino</option>
                                <option value="">Mantel redondo blanco en lino</option>
                                <option value="">Mantel redondo blanco en jacar</option>
                                <option value="">Mantel redondo blanco cofre</option>
                                <option value="">Mantel redondo de color en lino</option>
                                <option value="">Mantel tablón de color lino</option>
                                <option value="">Faldones blancos</option>
                                <option value="">Tapa cubre mantel 1.50 cm</option>
                                <option value="">Tapa blanca ponqué</option>
                                <option value="">Camino estándar de color</option>
                                <option value="">Camino brocado de color</option>
                                <option value="">Forro silla estándar</option>
                                <option value="">Forro silla multiuso</option>
                                <option value="">Fajón (moño) de color</option>
                                <option value="">Servilleta en tela blanca</option>
                                <option value="">Servilleta en tela color</option>
                                <option value="">Otros</option>
                            </optgroup>
                            <optgroup label="Muebles led">
                                <option value="">Materas led</option>
                                <option value="">Mesa led</option>
                                <option value="">Poltrona LED ARM</option>
                                <option value="">Poltrona LED</option>
                                <option value="">Puf tapizado led</option>
                                <option value="">Puf herramienta</option>
                                <option value="">Hielera Led</option>
                                <option value="">Sala LED de 10 puestos</option>
                                <option value="">Piso 3D SP3 D1</option>
                                <option value="">Piso LED SPL1</option>
                                <option value="">Otros</option>
                            </optgroup>
                            <optgroup label="Carpas">
                                <option value="">Carpas 2x2</option>
                                <option value="">Carpas 3x3</option>
                                <option value="">Carpas 4x4</option>
                                <option value="">Carpas 6x6</option>
                                <option value="">Hangares</option>
                                <option value="">Estructuras </option>
                                <option value="">Modulos </option>
                                <option value="">Otros</option>
                            </optgroup>
                            <optgroup label="mesas">
                        </select>
                        <button name="add">+</button>
                        <button name="erase">-</button>
                    </td>
                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Publicidad BTL/ATL</td>
                    <td><select id="" class="form-control">
                            <optgroup label="PUBLICIDAD ATL">
                                <option value="Radio">Radio</option>
                                <option value="Television">Television</option>
                                <option value="Periodicos">Periodicos</option>
                                <option value="Revistas">Revistas</option>
                                <option value="E-mail">E-mail</option>
                                <option value="Facebook adds">Facebook adds</option>
                                <option value="Whatsapp">Whatsapp</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Youtube">Youtube</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Badoo">Badoo</option>
                                <option value="Vimeo">Vimeo</option>
                                <option value="Snapchat">Snapchat</option>
                                <option value="Google AdWords">Google AdWords</option>
                                <option value="Spotify">Spotify</option>
                                <option value="Vallas-Gran Formato">Vallas-Gran Formato</option>
                                <option value="MultiPantalla Led">MultiPantalla Led</option>
                                <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                                <option value="Artistas">Artistas</option>
                                <option value="Deportistas">Deportistas</option>
                                <option value="Youtubers">Youtubers</option>
                                <option value="Periodistas">Periodistas</option>
                                <option value="Politicos">Politicos</option>
                                <option value="Call Center">Call Center</option>
                                <option value="Voz y Datos">Voz y Datos</option>
                                <option value="Movistar">Movistar</option>
                                <option value="Claro">Claro</option>
                                <option value="Tigo">Tigo</option>
                                <option value="Virgin Mobile">Virgin Mobile</option>
                                <option value="Avantel">Avantel</option>
                                <option value="otros">otros</option>
                        </select>
                        <div><select id="" class="form-control">
                                <optgroup label="PUBLICIDAD BTL"></optgroup>
                                <option value="Pasacalle">Pasacalle</option>
                                <option value="Pendones">Pendones</option>
                                <option value="Carteles">Carteles</option>
                                <option value="Perifoneo">Perifoneo</option>
                                <option value="TV Leds">TV Leds</option>
                                <option value="Jingles">Jingles</option>
                                <option value="CDS">CDS</option>
                                <option value="Volantes">Volantes</option>
                                <option value="Avisos">Avisos</option>
                                <option value="Tarjetas">Tarjetas</option>
                                <option value="Agendas">Agendas</option>
                                <option value="Cuadernos">Cuadernos</option>
                                <option value="Catalogos">Catalogos</option>
                                <option value="Calcomonia">Calcomonia</option>
                                <option value="Folletos">Folletos</option>
                                <option value="Rotulos">Rotulos</option>
                                <option value="Carpetas">Carpetas</option>
                                <option value="MemoPos-it">MemoPos-it</option>
                                <option value="Uniformes">Uniformes</option>
                                <option value="Camisetas">Camisetas</option>
                                <option value="Gorras">Gorras</option>
                                <option value="Disfrases">Disfrases</option>
                                <option value="Vasos">Vasos</option>
                                <option value="Pocillos">Pocillos</option>
                                <option value="Maletines">Maletines</option>
                                <option value="Cuadros">Cuadros</option>
                                <option value="PadsMause">PadsMause</option>
                                <option value="Relojes">Relojes</option>
                                <option value="Balones">Balones</option>
                                <option value="Paraguas">Paraguas</option>
                                <option value="Memorias USB">Memorias USB</option>
                                <option value="Esferos">Esferos</option>
                                <option value="Bolsas">Bolsas</option>
                                <option value="Manillas">Manillas</option>
                                <option value="Dulces">Dulces</option>
                                <option value="Stands">Stands</option>
                                <option value="Influenciador Digital">Influenciador Digital</option>
                                <option value="otros">otros</option>
                            </select></div>
                            <button name="add">+</button>
                        <button name="erase">-</button>
                    </td>
                    <td><input type="number" min="0" class="form-control">
                        <input type="number" min="0" class="form-control">
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Personal/RRHH</td>
                    <td><select id="" class="form-control">
                            <optgroup label="ARTE CIRCENSE">
                                <option value="Acrobatas">Acrobatas</option>
                                <option value="Contorsionistas ">Contorsionistas </option>
                                <option value="Equilibristas">Equilibristas</option>
                                <option value="Hombres Bala">Hombres Bala</option>
                                <option value="Mimos ">Mimos </option>
                                <option value="Zanqueros ">Zanqueros </option>
                                <option value="Mago">Mago</option>
                                <option value="Trapecistas">Trapecistas</option>
                                <option value="Ventrilocuos">Ventrilocuos</option>
                                <option value="Moniciclistas ">Moniciclistas </option>
                                <option value="Payasos ">Payasos </option>
                                <option value="Titiriteros">Titiriteros</option>
                            <optgroup label="PUESTA EN ESCENA">
                                <option value="Creativo">Creativo</option>
                                <option value="Iluminador ">Iluminador </option>
                                <option value="Escenografo">Escenografo</option>
                                <option value="Musicalizador ">Musicalizador </option>
                                <option value="Tramoyista">Tramoyista</option>
                                <option value="Encargado de vestuario">Encargado de vestuario</option>
                                <option value="Actor ">Actor </option>
                                <option value="Productor ">Productor </option>
                                <option value="Maquiladora  ">Maquiladora </option>
                                <option value="Actor ">Actor </option>
                                <option value="Productor ">Productor </option>
                                <option value="Maquiladora  ">Maquiladora </option>
                            <optgroup label="PERSONAL SHOWS">
                                <option value="Cantante">Cantante</option>
                                <option value="Bailarinas ">Bailarinas </option>
                                <option value="Maestro ceremonias ">Maestro ceremonias </option>
                                <option value="Edecanes ">Edecanes </option>
                                <option value="Cuentero">Cuentero</option>
                                <option value="DJ">DJ</option>
                                <option value="Grafitero">Grafitero</option>
                                <option value="Humoritas">Humoritas</option>
                                <option value="Especialista Juegos Piritecnicos">Especialista Juegos Piritecnicos</option>
                                <option value="Trovador ">Trovador </option>
                                <option value="Porristas ">Porristas </option>
                            <optgroup label="BAILARINES ">
                                <option value="Bailarin Tango">Bailarin Tango</option>
                                <option value="Bailarin Cha cha cha">Bailarin Cha cha cha</option>
                                <option value="Bailarin Rumba">Bailarin Rumba</option>
                                <option value="Bailarin Danza">Bailarin Danza</option>
                                <option value="Bailarin Salsa cubana">Bailarin Salsa cubana</option>
                                <option value="Bailarin Cumbia">Bailarin Cumbia</option>
                                <option value="Bailarin Champeta">Bailarin Champeta</option>
                                <option value="Bailarin rock an roll">Bailarin rock an roll</option>
                                <option value="Bailarin salsa puertoriqueña">Bailarin salsa puertoriqueña</option>
                                <option value="Bailarin Champeta">Bailarin Champeta</option>
                                <option value="Bailarin Flamenco">Bailarin Flamenco</option>
                                <option value="Bailarin Pole dance ">Bailarin Pole dance </option>
                            <optgroup label="DEPORTISTAS ">
                                <option value="Futbolista americano">Futbolista americano</option>
                                <option value="Voleibolista">Voleibolista</option>
                                <option value="Basquetbolista">Basquetbolista</option>
                                <option value="Futbolista americano">Futbolista americano</option>
                                <option value="Patinadora ">Patinadora </option>
                                <option value="Atleta">Atleta</option>
                                <option value="Automovilista">Automovilista</option>
                                <option value="Acrobata">Acrobata</option>
                                <option value="Paracaidista">Paracaidista</option>
                                <option value="Parapentista">Parapentista</option>
                                <option value="Ciclista">Ciclista</option>
                                <option value="Motociclista">Motociclista</option>
                                <option value="Luchador profesional">Luchador profesional</option>
                                <option value="Acrobata aereo">Acrobata aereo</option>
                                <option value="Jinete">Jinete</option>
                                <option value="Otros">Otros</option>
                            <optgroup label="GUIAS ">
                                <option value="Guia Museo">Guia Museo</option>
                                <option value="Guia Parques ">Guia Parques </option>
                                <option value="Guia Galeria">Guia Galeria</option>
                                <option value="Guia Jardin Botanico">Guia Jardin Botanico</option>
                                <option value="Guia turistico">Guia turistico</option>
                                <option value="Guia viñedo">Guia viñedo</option>
                                <option value="Guia Finca">Guia Finca</option>
                                <option value="Guia Reserva Natural">Guia Reserva Natural</option>
                        </select>
                        <div><button name="add">+</button>
                        <button name="erase" >-</button></div>
                        </td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Menaje</td>

                    <td><select id="myDropDownList" class="form-control">
<<optgroup label="CRISTALERIA">
<option value="Vaso bebida">Vaso bebida</option>
<option value="Vaso te helado">Vaso te helado</option>
<option value="Vaso rocks">Vaso rocks</option>
<option value="Vaso cervecero">Vaso cervecero</option>
<option value="Jarro cervecero">Jarro cervecero</option>
<option value="Vaso Malteada">Vaso Malteada</option>
<option value="Jarro mug">Jarro mug</option>
<option value="Mug">Mug</option>
<option value="Jarra">Jarra</option>
<option value="Jarra con tapa">Jarra con tapa</option>
<option value="Hielera">Hielera</option>
<option value="Copa gran vino">Copa gran vino</option>
<option value="Copa champaña">Copa champaña</option>
<option value="Copa agua">Copa agua</option>
<option value="Copa vin tinto">Copa vin tinto</option>
<option value="Copa vino blanco">Copa vino blanco</option>
<option value="Copa vino">Copa vino</option>
<option value="Copa martini">Copa martini</option>
<option value="Copa margarita">Copa margarita</option>
<option value="Copa brandy">Copa brandy</option>
<option value="Decanter">Decanter</option>
<option value="Copa aguardiente">Copa aguardiente</option>
<option value="Copa aperitivo">Copa aperitivo</option>
<option value="Licorera Decanter">Licorera Decanter</option>
<option value="Copa helado">Copa helado</option>
<optgroup label="VAJILLA">
<option value="Plato base">Plato base</option>
<option value="Plato pando">Plato pando</option>
<option value="Plato pasta">Plato pasta</option>
<option value="Plato pando coupe">Plato pando coupe</option>
<option value="Plato pando ala corta">Plato pando ala corta</option>
<option value="Plato postre">Plato postre</option>
<option value="Plato hondo">Plato hondo</option>
<option value="Plato hondo ala corta">Plato hondo ala corta</option>
<option value="Plato especial">Plato especial</option>
<option value="Plato frutas">Plato frutas</option>
<option value="Bandeja">Bandeja</option>
<option value="Bandeja ala corta">Bandeja ala corta</option>
<option value="Plato inclinado">Plato inclinado</option>
<option value="Salsera bote">Salsera bote</option>
<option value="Salero">Salero</option>
<option value="Pimentero">Pimentero</option>
<option value="Pocillo cappuccino">Pocillo cappuccino</option>
<option value="Pocillo americano">Pocillo americano</option>
<option value="Pocillo espresso">Pocillo espresso</option>
<option value="Pocillo doble espresso">Pocillo doble espresso</option>
<option value="Plato cappuccino">Plato cappuccino</option>
<option value="Plato espresso">Plato espresso</option>
<option value="Plato doble espresso">Plato doble espresso</option>
<option value="Plato chip dip">Plato chip dip</option>
<option value="Plato gotera pequeño">Plato gotera pequeño</option>
<option value="Plato gotera">Plato gotera</option>
<option value="Plato hexagonal">Plato hexagonal</option>
<option value="Plato servilleta">Plato servilleta</option>
<option value="Plato pizza">Plato pizza</option>
<option value="Cremera con asa">Cremera con asa</option>
<option value="Plato mantequillero">Plato mantequillero</option>
<option value="Palillero">Palillero</option>
<option value="Copa huevo">Copa huevo</option>
<option value="Azucarera apilable tapa">Azucarera apilable tapa</option>
<option value="Azucarera redonda tapa">Azucarera redonda tapa</option>
<option value="Azucarera sobre">Azucarera sobre</option>
<option value="Cremera indivudual">Cremera indivudual</option>
<option value="Lechera apilable">Lechera apilable</option>
<option value="Lechera redonda">Lechera redonda</option>
<option value="Tetera">Tetera</option>
<option value="Cafetera">Cafetera</option>
<option value="CUBIERTERIA">CUBIERTERIA</option>
<option value="Cuchara sopa">Cuchara sopa</option>
<option value="Cuchara consome">Cuchara consome</option>
<option value="Cuchara coctel helado">Cuchara coctel helado</option>
<option value="Cuchara postre">Cuchara postre</option>
<option value="Cuchara tinto">Cuchara tinto</option>
<option value="Cuchara te">Cuchara te</option>
<option value="Tenedor Postre">Tenedor Postre</option>
<option value="Tenedor entrada">Tenedor entrada</option>
<option value="Tenedor pescado">Tenedor pescado</option>
<option value="Tenedor mariscos">Tenedor mariscos</option>
<option value="Cuchillo mesa">Cuchillo mesa</option>
<option value="Cuchillo pala pescado">Cuchillo pala pescado</option>
<option value="Cuchillo entrada">Cuchillo entrada</option>
<option value="Cuchillo postre y fruta">Cuchillo postre y fruta</option>
<option value="Cuchillo mantequilla">Cuchillo mantequilla</option>
<option value="Cuchillo steak">Cuchillo steak</option>
<option value="Pala para torta">Pala para torta</option>
<option value="Tenedor para guarnicion">Tenedor para guarnicion</option>
<option value="Cuhara para guarnicion">Cuhara para guarnicion</option>
<option value="Pala mantequilla">Pala mantequilla</option>
<optgroup label="ACCESORIOS">
<option value="Bandeja ensaladera">Bandeja ensaladera</option>
<option value="Bandeja gratinar">Bandeja gratinar</option>
<option value="Bandeja o charol antideslizante">Bandeja o charol antideslizante</option>
<option value="Bombonera">Bombonera</option>
<option value="Bouillon">Bouillon</option>
<option value="Bowl">Bowl</option>
<option value="Bowl arista">Bowl arista</option>
<option value="Bowl sopa">Bowl sopa</option>
<option value="Canastilla para pan rectangular">Canastilla para pan rectangular</option>
<option value="Cazuela con tapa">Cazuela con tapa</option>
<option value="Charol y charolera">Charol y charolera</option>
<option value="Cuchara salsa">Cuchara salsa</option>
<option value="Dispensador de Bebidas">Dispensador de Bebidas</option>
<option value="Ensalada individual">Ensalada individual</option>
<option value="Ensaladera">Ensaladera</option>
<option value="Ensaladera salad bowl">Ensaladera salad bowl</option>
<option value="Ensaladera small bowl">Ensaladera small bowl</option>
<option value="Frasco confitero">Frasco confitero</option>
<option value="Frutero con ala">Frutero con ala</option>
<option value="Macedonia">Macedonia</option>
<option value="Molde lasaña">Molde lasaña</option>
<option value="Paellera">Paellera</option>
<option value="Pala y cuchillo ponque">Pala y cuchillo ponque</option>
<option value="Pinzas">Pinzas</option>
<option value="Plato mariscos">Plato mariscos</option>
<option value="Refractaria rectangular">Refractaria rectangular</option>
<option value="Salero- pimentero">Salero- pimentero</option>
<option value="Salsera estriada">Salsera estriada</option>
<option value="Salsera con cuchara">Salsera con cuchara</option>
<option value="Salsera lisa">Salsera lisa</option>
<option value="Sarten">Sarten</option>
<option value="Taza">Taza</option>
<option value="Taza Asa">Taza Asa</option>
<option value="Taza pie alto">Taza pie alto</option>
<option value="Torre para cupcakes">Torre para cupcakes</option>
<option value="Licuadora">Licuadora</option>
<option value="Cocina 4 puestos">Cocina 4 puestos</option>
<option value=""></option>
</select>
<div><button name="add">+</button>
                        <button name="erase" >-</button></div>
</td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Alimentos y bebidas</td>

                    <td><select id="myDropDownList" class="form-control">
                    <optgroup label="WHISKY">
<option value="BUCHANAN´S 12 AÑOS">BUCHANAN´S 12 AÑOS</option>
<option value="BUCHANAN´S 18 AÑOS">BUCHANAN´S 18 AÑOS</option>
<option value="BUCHANAN´S MASTER ">BUCHANAN´S MASTER </option>
<option value="CHIVAS REGAL ( 12 años) ">CHIVAS REGAL ( 12 años) </option>
<option value="CHIVAS REGAL ( 18 años) ">CHIVAS REGAL ( 18 años) </option>
<option value="GLENFIDDICH 12 AÑOS ">GLENFIDDICH 12 AÑOS </option>
<option value="GRANTS 8 AÑOS ">GRANTS 8 AÑOS </option>
<option value="JACK DANIELS">JACK DANIELS</option>
<option value="JHONNIE WALKER  SELLO AZUL">JHONNIE WALKER  SELLO AZUL</option>
<option value="JHONNIE WALKER  SELLO NEGRO ">JHONNIE WALKER  SELLO NEGRO </option>
<option value="JHONNIE WALKER  SELLO ROJO">JHONNIE WALKER  SELLO ROJO</option>
<option value="JHONNIE WALKER  SELLO ROJO">JHONNIE WALKER  SELLO ROJO</option>
<option value="JIM BEAM ">JIM BEAM </option>
<option value="OLD PARR 12 AÑOS">OLD PARR 12 AÑOS</option>
<option value="SIR EDWARDS ">SIR EDWARDS </option>
<option value="SOMETHING SPECIAL ">SOMETHING SPECIAL </option>
<optgroup label="VODKAS">
<option value="ABSOLUT ">ABSOLUT </option>
<option value="ABSOLUT CITRON ">ABSOLUT CITRON </option>
<option value="ABSOLUT VANILIA ">ABSOLUT VANILIA </option>
<option value="CIROC ">CIROC </option>
<option value="FINLANDIA ">FINLANDIA </option>
<option value="GREY GOOSE ">GREY GOOSE </option>
<option value="SKYY ">SKYY </option>
<option value="SMIRNOFF ">SMIRNOFF </option>
<option value="SMIRNOFF ICE ">SMIRNOFF ICE </option>
<optgroup label="GINEBRA">
<option value="BEEFEATER ">BEEFEATER </option>
<option value="BOMBAY">BOMBAY</option>
<option value="GORDONS">GORDONS</option>
<option value="HENDRICKS ">HENDRICKS </option>
<option value="TANQUERAY GIN">TANQUERAY GIN</option>
<option value="TANQUERAY TEN ">TANQUERAY TEN </option>
<optgroup label="RONES">
<option value="BACARDI AÑEJO 12 AÑOS">BACARDI AÑEJO 12 AÑOS</option>
<option value="BACARDI AÑEJO  8 AÑOS">BACARDI AÑEJO  8 AÑOS</option>
<option value="BACARDI ORO">BACARDI ORO</option>
<option value="BACARDI SUPERIOR">BACARDI SUPERIOR</option>
<option value="BACARDI LIMON ">BACARDI LIMON </option>
<option value="BARCARDI ORO ">BARCARDI ORO </option>
<option value="BACARDI COCO">BACARDI COCO</option>
<option value="BACARDI PIÑA COLADA">BACARDI PIÑA COLADA</option>
<option value="BACARDI MOJITO">BACARDI MOJITO</option>
<option value="BACARDI BIG APPLE">BACARDI BIG APPLE</option>
<option value="HABANA BLANCO">HABANA BLANCO</option>
<option value="HABANA CLUB AÑEJO 7 AÑOS">HABANA CLUB AÑEJO 7 AÑOS</option>
<option value="HABANA CLUB AÑEJO 7 ESPECIAL">HABANA CLUB AÑEJO 7 ESPECIAL</option>
<option value="MEDELLIN 12 AÑOS ">MEDELLIN 12 AÑOS </option>
<option value="MEDELLIN 8 AÑOS ">MEDELLIN 8 AÑOS </option>
<option value="SANTAFE 12 AÑOS">SANTAFE 12 AÑOS</option>
<option value="SANTAFE 8 AÑOS">SANTAFE 8 AÑOS</option>
<option value="VIEJO DE CALDAS 5 AÑOS">VIEJO DE CALDAS 5 AÑOS</option>
<option value="VIEJO DE CALDAS 8 AÑOS">VIEJO DE CALDAS 8 AÑOS</option>
<option value="ZACAPA 15 AÑOS ">ZACAPA 15 AÑOS </option>
<option value="ZACAPA 23 AÑOS ">ZACAPA 23 AÑOS </option>
<option value="ZACAPA XO">ZACAPA XO</option>
</select>
<div><button name="add">+</button>
                        <button name="erase">-</button></div>
</td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Hospedaje</td>
                    <td><select id="" class="form-control">
<option value="ALBERGUE- REFUGIO- HOSTAL">ALBERGUE- REFUGIO- HOSTAL</option>
<option value="ALOJAMIENTO RURAL- LODGE">ALOJAMIENTO RURAL- LODGE</option>
<option value="APARTAHOTEL">APARTAHOTEL</option>
<option value="APARTAMENTOS TURISTICOS">APARTAMENTOS TURISTICOS</option>
<option value="HOTEL">HOTEL</option>
<option value="POSADAS TURISTICAS">POSADAS TURISTICAS</option>
<option value="RECINTO DE CAMPAMENTO O CAMPING">RECINTO DE CAMPAMENTO O CAMPING</option>
</select>
<div><button name="add">+</button>
                        <button name="erase" >-</button></div>
                    
                    </td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Transporte</td>
                    <td><select id="myDropDownList" class="form-control">
                    <optgroup label="TERRESTRE">
<option value="AUTOMOVILES CLASICOS">AUTOMOVILES CLASICOS</option>
<option value="BUS">BUS</option>
<option value="CAMIONETA ">CAMIONETA </option>
<option value="CHIVAS">CHIVAS</option>
<option value="ESPECIAL DISCAPACITADOS">ESPECIAL DISCAPACITADOS</option>
<option value="LIMUSINA">LIMUSINA</option>
<option value="MINIVANS">MINIVANS</option>
<option value="VANS">VANS</option>
<optgroup label="MARITIMO">
<option value="BARCO">BARCO</option>
<option value="CANOA">CANOA</option>
<option value="FERRI">FERRI</option>
<option value="GONDOLA">GONDOLA</option>
<option value="YATE">YATE</option>
<optgroup label="AEREO">
<option value="AVION">AVION</option>
<option value="AVIONETA">AVIONETA</option>
<option value="GLOBO">GLOBO</option>
<option value="HELICOPTERO">HELICOPTERO</option>
</select>
<div><button name="add">+</button>
                        <button name="erase" >-</button></div>
                    </td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Otros requerimientos</td>
                    <td><select id="myDropDownList" class="form-control">
<option value="Decoración">Decoración</option>
<option value="Vestuario temático">Vestuario temático</option>
<option value="Músicos">Músicos</option>
<option value="Fotografía">Fotografía</option>
</select>
<div><button name="add">+</button>
                        <button name="erase" >-</button></div>
</td>

                    <td><input type="number" min="0" class="form-control"></td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input name="presupuesto" id="number" min="1" required class="form-control" aria-label="Amount (to the nearest dollar)">
                        </div>
                    </td>
                </tr>


            </table>
        </div>
    </div>
    <script>
        $('button[name=erase]').on('click', function () {
            $(this).closest("tr").remove();
        })
    </script>

    <script>
        $('button[name=add]').on('click', function () {
            // this will select the first tr parent that contain the button
            var cloned = $(this).closest('tr').clone(true);

            $('#table1').append(cloned);
        })
    </script>
</body>

</html>