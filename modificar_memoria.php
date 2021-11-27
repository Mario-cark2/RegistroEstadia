<?php 
	
require('C:\xampp\htdocs\proyecto\conexion.php');
$id=$_GET['id'];
$query="SELECT id_memorias,id_universidades,id_carrera,titulo,id_generacion,
   asesor_empresarial,alumno,id_grado,id_empresa,id_asesor_academico FROM memorias WHERE id_memorias='$id'";
$resultado=$conexion->query($query);
	
?>

<html>
	<head>
		<title>Modificar Usuario</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
		<center>
			
			<?php 
			   $row=$resultado->fetch_assoc();
			 ?>
				
				<form action='hacer_cambios_memorias.php' method='POST'>

                        <input type="hidden" name="id" value=<?php echo $id;?>">

				   <label>Universidades: </label>
				   <input name='id_universidades' type='text' value='<?php echo $row['id_universidades'];?>' <br>
	
				   <label>Carrera: </label>
				   <input name='id_carrera' type='text' value='<?php echo $row['id_carrera'];?>' <br>	 

				   <label>Titulo: </label>
				   <input name='titulo' type='text' value='<?php echo $row['titulo'];?>'<br>	
               
                                   <label>Generacion: </label>
				   <input name='id_generacion' type='text' value='<?php echo $row['id_generacion'];?>' <br>

				   <label>Asesor Empresarial: </label>
				   <input name='asesor_empresarial' type='text' value='<?php echo $row['asesor_empresarial'];?>' <br>

				   <label>Alumno: </label>
				   <input name='alumno' type='text' value='<?php echo $row['alumno'];?>' <br>

				   <label>Grado: </label>
				   <input name='id_grado' type='text' value='<?php echo $row['id_grado'];?>' <br>

				   <label>Empresa: </label>
				   <input name='id_empresa' type='text' value='<?php echo $row['id_empresa'];?>' <br>

				   <label>Asesor Academico: </label>
				   <input name='id_asesor_academico' type='text' value='<?php echo $row['id_asesor_academico'];?>' <br>
		 
	 			   <input type='submit' name='submit' value='Registrar'>
	 
				</form>
			
 	       </center>
	</body>
</html>




