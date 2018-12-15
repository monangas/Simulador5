<style>
           
            .principal{
                background-color: #047b75;
            }
            .secundario{
                background-color: #70b22d;
                color: white;
            }
            .relleno-espacio{
                width: 100%;
                height: 80px;
            }
            textarea{
                width: 100%;
            }

            #fi2{
                height: 450px;

                overflow-y: scroll;
            }
            .actualizar {
                display: none;
            }
            .container{
                background-color: white;
                box-shadow: 1px 3px 20px black;
            }
            .borde{
                padding: 10px;

            }
        </style>

<nav class="navbar navbar-expand-sm  navbar-dark principal">
            <ul class="navbar-nav">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Receta estándar</a>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="#" data-toggle="modal" onclick="recetaEstandar()">Receta con ICO</a>
                        <a class="dropdown-item" href="#">Vinos</a>
                        
                      </div>
                </li>
               
            </ul>
</nav>