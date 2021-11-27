<?php
require('C:\xampp\htdocs\proyecto\conexion.php');
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$tipo_de_usuario=$_POST['tipo_de_usuario'];
$correo=$_POST['correo'];
$matricula=$_POST['matricula'];
$contra=$_POST['contra'];
$sql="INSERT INTO usuarios(nombre,apellidos,tipo_de_usuario,correo,matricula,contra)
VALUES('$nombre','$apellidos','$tipo_de_usuario','$correo','$matricula','$contra')";
$result=$conexion->query($sql);
?>
<html>
<style>

	body{background: silver;}

</style>
<head>
<title>Guardar datos del Usuario</title>
</head>
<body>
<center>

	<div class="wlcm">

		<h1>Bienvenidos a UT memorias.</h1>

		<a href="login.html"><img src="img/utmemorias.png" width="200" height="200" align="center"></a>
		<br>
		
<?php if($result>0){ ?>
<h1>Datos del usuario guardados</h1>
Sus datos han sido guardados favor de hacer click sobre la imagen para continuar<br>

</div>

<?php }else{ ?>
<h1> Error al guardar datos </h1>
<?php } ?>
</body>
</html>