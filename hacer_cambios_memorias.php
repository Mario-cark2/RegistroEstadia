<?php 
require('C:\xampp\htdocs\proyecto\conexion.php');

$id=$_POST['id'];
$id_universidades=$_POST['id_universidades'];
$id_carrera=$_POST['id_carrera'];
$titulo=$_POST['titulo'];
$id_generacion=$_POST['id_generacion'];
$asesor_empresarial=$_POST['asesor_empresarial'];
$alumno=$_POST['alumno'];
$id_grado=$_POST['id_grado'];
$id_empresa=$_POST['id_empresa'];
$id_asesor_academico=$_POST['id_asesor_academico'];

$query="UPDATE memorias SET id_universidades='$id_universidades', id_carrera='$id_carrera', titulo='$titulo',
id_generacion='$id_generacion',asesor_empresarial='$asesor_empresarial',alumno='$alumno',
id_grado='$id_grado',id_empresa='$id_empresa',id_asesor_academico='$id_asesor_academico' WHERE id_memorias='$id'";
$resultado=$conexion->query($query);
?>

<html>
	<head>
		<title>Modificar Memoria</title>
	</head>
	
	<body>
		<center>
			<?php 	if($resultado>0){	?>
				
				<h1>Datos de la Memoria Modificados</h1>


				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Datos de la memoria</h1>
				
			<?php	} ?>
		
		</center>
	</body>
</html>
