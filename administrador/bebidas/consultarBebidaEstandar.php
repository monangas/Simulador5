<?php ?>

<button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal1"><img src="../imagenes/vino.JPG" class="rounded" alt="Copa de vino" width="150px" ><br>Bebida estándar </button>
<div class="modal" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Receta bebida estándar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table table-responsive table-striped table-bordered">
                    <tr>
                        <th>Ingredientes</th><th>Unidad</th><th>Cantidad</th><th>Valor unitario</th><th>Valor Total</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="ingrediente1" id=""></td>
                        <td><input type="text" class="form-control" name="" id="unidad1"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad1"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni1"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal1" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente2"></td>
                        <td><input type="text" class="form-control" name="" id="unidad2"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad2"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni2"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal2" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente3"></td>
                        <td><input type="text" class="form-control" name="" id="unidad3"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad3"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni3"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal3" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente4"></td>
                        <td><input type="text" class="form-control" name="" id="unidad4"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad4"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni4"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal4" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente5"></td>
                        <td><input type="text" class="form-control" name="" id="unidad5"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad5"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni5"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal5" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente6"></td>
                        <td><input type="text" class="form-control" name="" id="unidad6"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad6"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni6"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal6" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente7"></td>
                        <td><input type="text" class="form-control" name="" id="unidad7"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad7"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni7"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal7" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente8"></td>
                        <td><input type="text" class="form-control" name="" id="unidad8"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad8"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni8"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal8" readonly=""></td>     
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="" id="ingrediente9"></td>
                        <td><input type="text" class="form-control" name="" id="unidad9"></td>
                        <td><input type="text" class="form-control" name="" id="cantidad9"></td>
                        <td><input type="text" class="form-control" name="" id="valoruni9"></td>
                        <td><input type="text" class="form-control" name="" id="valortotal9" readonly=""></td>     
                    </tr>
                    <tr>
                        <td colspan="3">Costo total de la materia prima</td>
                        <td></td>
                        <td><input type="number" class="form-control" id="ct' . $rows['idreceta'] . '' . $rows['idreceta'] . '"  readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Margen de error o variación</td>
                        <td><input type="number" class="form-control" value="10" id="me' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                        <td><input type="text" class="form-control" id="me' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Costo total de la preparación</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="ctp' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Costo 10 %</td>
                        <td><input type="number" class="form-control"  value="10" id="cos' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                        <td><input type="number" class="form-control"  id="cos' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Precio potencial de venta</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="ppv' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Porcentaje costo materia prima (ideal para ayb gerencia)</td>
                        <td><input type="number" class="form-control"  value="31" id="pcmp' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                        <td><input type="number" class="form-control"  id="pcmp' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Precio de venta antes de impuestos</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="pvi' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Impuesto Nacional al Consumo</td>
                        <td><input type="number" class="form-control"  value="8" id="inac' . $rows['idreceta'] . '' . $rows['idreceta'] . '2" oninput="ejecutar(\'' . $rows['idreceta'] . '\',\'' . $ii . '\')"/>%</td>
                        <td><input type="number" class="form-control"  id="inac' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">Precio de venta con ICO	</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="pvico' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">PRECIO DE VENTA	</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="pv' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">COSTO DE VENTA POR PORCION</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="cvp' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>
                    <tr>
                        <td colspan="3">PRECIO DE VENTA POR PORCION</td>
                        <td></td>
                        <td><input type="number" class="form-control"  id="pvpp' . $rows['idreceta'] . '' . $rows['idreceta'] . '" readonly=""/></td>
                    </tr>

                </table></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>







