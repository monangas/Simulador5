<style>
    #avatar{

        position: absolute;
        top: 220px;

    }

   
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

<script>
    $(document).ready(function () {
        $("#avatar").mouseover(function () {
            $("#avatar").attr("src", "../gif/Profesor-02.gif");
        });
        $("#avatar").mouseleave(function () {
            $("#avatar").attr("src", "../gif/profesor-01.gif");
        });
    });
</script>

<!--<nav class="navbar navbar-expand-sm  navbar-dark principal">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="../index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../modulo1/index.php">Módulo 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../modulo2/index.php">Módulo 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../modulo3/index.php">Módulo 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../modulo4/index.php">Módulo 4</a>
        </li>
    </ul>
</nav>-->
<nav id="barmenu" class="navbar navbar-expand-sm navbar-dark">
    <a class="navbar-brand" href="#">SENNOVA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="..\index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Planeaci&oacuten
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="..\modulo1\index.php">Módulo 1.1</a>
                    <a class="dropdown-item" href="..\modulo1\modulo1.2.php">Módulo 1.2</a>
                    <a class="dropdown-item" href="..\modulo1\modulo1.3.php">Módulo 1.3</a>
                    <a class="dropdown-item" href="..\modulo1\portafolio.php">Portafolio</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Organizaci&oacuten
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Módulo 2.1</a>
                    <a class="dropdown-item" href="#">Módulo 2.2</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Plan de Costeo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../modulo3/modulo3.php">Módulo 3.1</a>
                   
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Presupuesto
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../modulo4/index.php">Módulo 4.1</a>
                    <a class="dropdown-item" href="#">Módulo 4.2</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>