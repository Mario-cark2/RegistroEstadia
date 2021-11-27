<?php 
require('C:\xampp\htdocs\proyecto\conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$tipo_de_usuario=$_POST['tipo_de_usuario'];
$correo=$_POST['correo'];
$matricula=$_POST['matricula'];
$contra=$_POST['contra'];

$query="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', tipo_de_usuario='$tipo_de_usuario',
correo='$correo',matricula='$matricula',contra='$contra' WHERE id_usuarios='$id'";
$resultado=$conexion->query($query);
?>

<html>
	<head>
		<title>Modificar Usuario</title>
	</head>
	
	<body>
		<center>
			<?php 	if($resultado>0){	?>
				
				<h1>Datos del Usuario Modificados</h1>


				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Datos del Usuario</h1>
				
			<?php	} ?>
		
		</center>
	</body>
</html>
