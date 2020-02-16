<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset= utf-8"/>
        <title>Ejemplo 2 - MVC PHP</title> 

    </head>
    <body>
        <?php foreach($consulta as $datos): ?>
        <h1>Modificar informacion</h1>
        <br>
        <form name="form1" method="post" action="index.php?accion=guardarCambiosTipoDocumento">
            <p>Id: <input type="text" name="txtid" value="<?php echo $_REQUEST['id'];?>" readonly></p>
            <p>Nombre: <input type="text" name="txtnombre" value="<?php echo $datos['nombre'] ?>"></p>
            <p><input type="submit" name="btnguardarcambios" value="Guardar Cambios"></p>
        </form>
        <?php endforeach; ?>

    </body>


</html>