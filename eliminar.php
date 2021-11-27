<?php
require('C:\xampp\htdocs\proyecto\conexion.php');


 
$id=$_GET['id'];
$query="DELETE FROM usuarios WHERE id_usuarios='$id'";
$resultado=$conexion->query($query);
?>
 
<html>
<head>
    <title>Borrado de informaci&oacute;n</title>

    </head>
<body>
 

    <center>
    <?php if($resultado>0) { ?>
        <h1>
        Eliminaci&oacute;n de datos exitosos
        </h1>
        <?php }else { ?>
        <h1>Erro al realizar la eliminaci&oacute;n</h1>
        <?php } ?>
    </center>
    </body>
</html>