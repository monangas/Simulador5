
<?php
include_once '../conexion/conexion1.php';
$con = new conexion();
$con->conexion();
$tipo = "";
$z = 0;
$r = $con->consulta("SELECT * FROM `receta` ORDER BY `receta`.`tipo` DESC;");
while ($rows = $r->fetch_array()) {

    if ($tipo != $rows['tipo']) {
        echo '<br>';
        echo $tipo = $rows['tipo'];
        echo '<br>';
    }
    echo '<button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModa' . $rows['idreceta'] . '"><img src="../' . $rows['imagen'] . '" class="rounded" alt="' . $rows['nombre'] . '" width="200px" height="100px"><br>' . $rows['nombre'] . ' </button>';
}
$r = $con->consulta("select * from receta 
inner join ingrediente_por_receta on idreceta=receta_idreceta
inner join ingrediente on ingrediente_idingrediente=idingrediente
order by tipo, idreceta asc;");
$i = "";
$n = 1;
$x2 = FALSE;
$resto;
$finmodal;

$ii = 0;
while ($rows = $r->fetch_array()) {


    if ($i != $rows['idreceta']) {

        if($x2){
            echo $finmodal;
        }
        $n = $rows['idreceta'];

        // tabla superior
        echo '<div class="modal fade" id="myModa' . $n . '" role="dialog"><div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-body">';
        echo '<table class="table table-responsive table-striped table-bordered">';
        echo '<tr><th colspan="3">Nombre de la preparación <br> ' . $rows['nombre'] . "</th>";
        echo "<th>Tipo " . $rows['tipo'] . "</th>";
        echo "<th>Porciones " . $rows['porciones'] . "<script> porcion=" . $rows['porciones'] . ";</script></th></tr>";

        echo '<tr>'
        . '<th>Ingredientes</th><th>Unidad</th><th>Cantidad</th><th>Valor unitario</th><th>Valor Total</th>'
        . '</tr>';
        $i = $rows['idreceta'];
        $x2=TRUE;
        
        $finmodal = ' 


               
                <tr>
                    <td colspan="3">Costo total de la materia prima</td>
                    <td></td>
                    <td><input type="number" class="form-control" id="ct' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Margen de error o variación</td>
                    <td><input type="number" class="form-control" value="10" id="me' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                    <td><input type="text" class="form-control" id="me' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Costo total de la preparación</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="ctp' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Costo 10 %</td>
                    <td><input type="number" class="form-control"  value="10" id="cos' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                    <td><input type="number" class="form-control"  id="cos' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Precio potencial de venta</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="ppv' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Porcentaje costo materia prima (ideal para ayb gerencia)</td>
                    <td><input type="number" class="form-control"  value="31" id="pcmp' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                    <td><input type="number" class="form-control"  id="pcmp' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Precio de venta antes de impuestos</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="pvi' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Impuesto Nacional al Consumo</td>
                    <td><input type="number" class="form-control"  value="8" id="inac' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                    <td><input type="number" class="form-control"  id="inac' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">Precio de venta con ICO	</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="pvico' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">PRECIO DE VENTA	</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="pv' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">COSTO DE VENTA POR PORCION</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="cvp' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>
                <tr>
                    <td colspan="3">PRECIO DE VENTA POR PORCION</td>
                    <td></td>
                    <td><input type="number" class="form-control"  id="pvpp' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>
                </tr>

                ' . '</table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div>';

        
        
        
    }

    echo "<tr>"
    . "<td> " . $rows['ingrediente'] . "</td>";
    echo "<td> " . $rows['unidad'] . "</td>";
    echo '<td><label id="c' . $rows['idreceta'] . '' . $ii . '">' . $rows['cantidad'] . "</label></td>";
    echo '<td> <input class="form-control"  type="text" id="vu' . $rows['idreceta'] . '' . $ii . '" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/></td>';
    echo '<td> <input   type="text" id="vt' . $rows['idreceta'] . '' . $ii . '" class="form-control r' . $rows['idreceta'] . '' . $rows['idreceta'] . '"/></td>'
    . "</tr>";
    $ii++;
}

echo @$finmodal;





$con->cerrarConexion();
?>
<script type="text/javascript">
    var porcion;
    function ejecutar(i, d) {
        var c = parseFloat($("#c" + i + d).text());
        var vu = parseFloat($("#vu" + i + d).val());
        var vt = vu * c;
        $("#vt" + i + d).val(vt);
        var r = document.getElementsByClassName("r" + i + i);

        valor = 0;
        for (ni = 0; ni < r.length; ni++) {
            if (r[ni].value != "") {
                v = parseFloat(r[ni].value);

                valor = valor + v;
                $("#ct" + i + i).val(valor);
            }
        }

        var t = parseFloat($("#ct" + i + i).val());
        
        $("#me" + i + i).val(t*($("#me"+i+i+"2").val()/100));
        var me = parseFloat($("#me" + i + i).val());
       
        $("#ctp" + i + i).val(t + me);
        var ctp = parseFloat($("#ctp" + i + i).val());
        
        $("#cos" + i + i).val(ctp *($("#cos"+i+i+"2").val()/100));
        var cos = parseFloat($("#cos" + i + i).val());
        
        $("#ppv" + i + i).val(cos + ctp);
        var ppv = parseFloat($("#ppv" + i + i).val());
        
        $("#pcmp" + i + i).val(ppv * ($("#pcmp"+i+i+"2").val()/100));
        var pcmp = parseFloat($("#pcmp" + i + i).val());
        
        $("#pvi" + i + i).val(ppv + pcmp);
        var pvi = parseFloat($("#pvi" + i + i).val());
        
        $("#inac" + i + i).val(pvi * ($("#inac"+i+i+"2").val()/100));
        var inac = parseFloat($("#inac" + i + i).val());
        
        $("#pvico" + i + i).val(inac + pvi);
        var pvico = parseFloat($("#pvico" + i + i).val());
        
        $("#pv" + i + i).val(inac + pvico);
        var pv = parseFloat($("#pv" + i + i).val());
        $("#cvp" + i + i).val(pv / porcion);
        var cvp = parseFloat($("#cvp" + i + i).val());
        $("#pvpp" + i + i).val(Math.ceil(pv / porcion));
        var pvpp = parseFloat($("#pvpp" + i + i).val());


    }
</script>

        