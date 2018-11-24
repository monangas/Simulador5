<html>

<head>
    <title>SCP Simulador-Planeaci&oacuten</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="../css/index.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</head>

<body>
    <?php
        require_once '../menus/menuPrincipal.php';
        ?>
    <br>
    <div class="container" style="">
        <div class="panel panel-default panel1" style="height: 600px; overflow-y: scroll">

            <div id="app">
                <main role="main" class="mt-4">

                    <form @submit.prevent="save">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Item No</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col" class="text-center">Valor unitario</th>
                                                <th scope="col text-right">Cantidad</th>
                                                <th scope="col text-right">Valor total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(product, k) in products" :key="k">
                                                <td scope="row" class="trashIconContainer">
                                                    <i class="far fa-trash-alt" @click="deleteRow(k, product)"></i>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" v-model="product.product_no" />
                                                </td>
                                                <td>
                                                    <input class="form-control" type="text" v-model="product.product_name" />
                                                </td>
                                                <td>
                                                    <input class="form-control text-right" type="number" min="0" step=".01"
                                                        v-model="product.product_price" @change="calculateLineTotal(product)" />
                                                </td>
                                                <td>
                                                    <input class="form-control text-right" type="number" min="0" step=".01"
                                                        v-model="product.product_qty" @change="calculateLineTotal(product)" />
                                                </td>
                                                <td>
                                                    <input readonly class="form-control text-right" type="number" min="0"
                                                        step=".01" v-model="product.line_total" />
                                                </td>
                                            </tr>
                                            <tr v-show="products.length === 0">
                                                <td colspan="6">
                                                    <p class="text-center alert-danger p-2">
                                                        No products added/available.
                                                    </p>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5" class="text-right">Sub total</td>
                                                <td class="text-right">{{subtotal}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right">Impuestos</td>
                                                <td class="text-right">{{tax}}%</td>
                                            </tr>
                                            <tr>
                                                <td><input type="number" v-model="tax"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5" class="text-right">Total alimentos y bebidas</td>
                                                <td class="text-right">{{total}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 mb-2">
                                <button type='button' class="btn btn-info" @click="addNewRow">
                                    <i class="fas fa-plus-circle"></i>
                                    Add
                                </button>
                            </div>
                            <div class="col-md-12 mb-4 text-center">
                                <button type='button' class="btn btn-success submit_btn -save-bottom" @click="save">
                                    <i class="far fa-save"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
            <button class="btn btn-info" onclick="location.href='index1.2.2.php'">Llévame a otro lado</button>
        </div>
    </div>
    <script>
        var app = new Vue({
            el: "#app",
            data: {
                subtotal: 0,
                total: 0,
                tax: 0,
                products: [{
                    product_no: '',
                    product_name: '',
                    product_price: '',
                    product_qty: '',
                    line_total: 0
                }]
            },

            methods: {
                save() {
                    console.log(JSON.stringify(this.products));
                },
                calculateTotal() {
                    var subtotal, total;
                    subtotal = this.products.reduce(function (sum, product) {
                        var lineTotal = parseFloat(product.line_total);
                        if (!isNaN(lineTotal)) {
                            return sum + lineTotal;
                        }
                    }, 0);

                    this.subtotal = subtotal.toFixed(2);

                    total = (subtotal * (this.tax / 100)) + subtotal;
                    total = parseFloat(total);
                    if (!isNaN(total)) {
                        this.total = total.toFixed(2);
                    } else {
                        this.total = '0.00'
                    }
                },
                calculateLineTotal(product) {
                    var total = parseFloat(product.product_price) * parseFloat(product.product_qty);
                    if (!isNaN(total)) {
                        product.line_total = total.toFixed(2);
                    }
                    this.calculateTotal();
                },
                deleteRow(index, product) {
                    var idx = this.products.indexOf(product);
                    console.log(idx, index);
                    if (idx > -1) {
                        this.products.splice(idx, 1);
                    }
                    this.calculateTotal();
                },
                addNewRow() {
                    this.products.push({
                        product_no: '',
                        product_name: '',
                        product_price: '',
                        product_qty: '',
                        line_total: 0
                    });
                }
            }
        });
    </script>
    <div id="logomoduno"><a href="http://www.sena.edu.co/es-co/formacion/Paginas/tecnologia-innovacion.aspx"><img src="/img/logo_sennova.png"/></a></div>
        <div id="logo_dosmoduno"><a href="http://oferta.senasofiaplus.edu.co/sofia-oferta/"><img src="/img/logo_sena.png"/></a></div>
        <!--<div id="footer"></div>-->
        <div id="monedin"><img src="/gif/Monedin_Saludo.gif"/></div>

</body>

</html>