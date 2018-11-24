var filas=5;

  
   

function operar() {
    var costoTotal = document.getElementById("costoTotal");

    costoTotal.value = 0;
    var int = document.getElementsByClassName("vuni");
    var i = int.length;
    var c = document.getElementsByClassName("c");
    var vt = document.getElementsByClassName("vt");
    for (x = 0; x < i; x++) {
        filas=x+1;
        vt[x].value = int[x].value * c[x].value;
        costoTotal.value = parseInt(costoTotal.value) + parseInt(vt[x].value);

    }
    var margenError = document.getElementById("margenError");


    var margenError1 = document.getElementById("margenError1");
    margenError1.value = (parseInt(margenError.value) / 100) * parseInt(costoTotal.value);
    var costoTotalPrepara = document.getElementById("costoTotalPrepara");
    costoTotalPrepara.value = parseInt(margenError1.value) + parseInt(costoTotal.value);
    var costo = document.getElementById("costo");
    var costo1 = document.getElementById("costo1");
    costo1.value = (parseInt(costo.value) / 100) * parseInt(costoTotalPrepara.value);
    var precioPotencial = document.getElementById("precioPotencial");
    precioPotencial.value = parseInt(costo1.value) + parseInt(costoTotalPrepara.value);

    var ganancia = document.getElementById("ganancia");
    var ganancia1 = document.getElementById("ganancia1");
    ganancia1.value = (parseInt(ganancia.value) / 100) * parseInt(precioPotencial.value);

    var precioVenta = document.getElementById("precioVenta");
    precioVenta.value = parseInt(ganancia1.value) + parseInt(precioPotencial.value);

    var impuesto = document.getElementById("impuesto");
    var impuesto1 = document.getElementById("impuesto1");
    impuesto1.value = (parseInt(impuesto.value) / 100) * parseInt(precioVenta.value);

    var ico = document.getElementById("ico");
    ico.value = parseInt(precioVenta.value) + parseInt(impuesto1.value);


    var precioVentaCliente = document.getElementById("precioVentaCliente");
    precioVentaCliente.value = parseInt(ico.value) / 2;
}

function recetaEstandar() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("contenido").innerHTML =
                    this.responseText;
        }
    };
    xhttp.open("GET", "recetaEstandar.php", true);
    xhttp.send();
}

function adicionarFila(){
      filas=filas+1;
       
        var f='<tr><td>'+ filas+'</td>'+
			        '<td class="col-xs-2"><input type="text" name="i' + filas+ '" class="form-control" ></td>'+
			        '<td class="col-xs-2"><input type="number" name="c' + filas+ '" class="form-control c" value="0" onchange="operar()" ></td>'+
			        '<td class="col-xs-2">'+
			        	'<select class="form-control" name="um' + filas+ '">'+
			        		'<option>Kg</option>'+
			        		'<option>Ml</option>'+
			        		'<option>Un</option>'+
			        	'</select>'+
			       ' </td>'+
			        '<td><input type="number" name="vuni' + filas+ '" class="form-control vuni" value="0" onchange="operar()"  ></td>'+
			        '<td><input type="number" name="vtotal' + filas+ '" class="form-control vt" readonly="" ></td>'+
			      '</tr>';
        $("#tabla1").append(f);
}