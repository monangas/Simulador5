<?php
if (isset($_POST['submit'])) {
    require_once '../../conexion/conexion1.php';
    $con = new conexion();
    $con->conexion();
    $sql="insert into persona values('".$_POST['documento']."','".$_POST['pnombre']."','".$_POST['snombre']."','".$_POST['papellido']."','".$_POST['sapellido']."',md5('".$_POST['pwd']."'),'no',null,'Estandar')";
    $con->consulta($sql);
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" target="_self">
    <div class="form-group">
        <label for="documento">Documento:</label>
        <input type="number" placeholder="Documento"  minlength="6" name="documento" class="form-control" id="documento">
    </div>
    <div class="form-group">
        <label for="pnombre">Primer Nombre</label>
        <input type="text" placeholder="Primer nombre" name="pnombre" class="form-control" id="pnombre">
    </div>
    <div class="form-group">
        <label for="snombre">Segundo nombre:</label>
        <input type="text" placeholder="Segundo nombre" name="snombre" class="form-control" id="snombre">
    </div>
    <div class="form-group">
        <label for="papellido">Primer apellido</label>
        <input type="text" placeholder="Primer apellido" name="papellido" class="form-control" id="papellido">
    </div>
    <div class="form-group">
        <label for="sapellido">Segundo apellido:</label>
        <input type="text" placeholder="Segundo apellido" name="sapellido" class="form-control" id="sapellido">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" class="form-control" id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd2">Repita el Password:</label>
        <input type="password" class="form-control" id="pwd2">
    </div>

    <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form> 
