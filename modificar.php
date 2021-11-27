<?php 
	
require('C:\xampp\htdocs\proyecto\conexion.php');
$id=$_GET['id'];
$query="SELECT id_usuarios,nombre,apellidos,tipo_de_usuario,correo,matricula,contra FROM usuarios WHERE id_usuarios='$id'";
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
				
				<form action='hacer_cambios.php' method='POST'>

                        <input type="hidden" name="id" value=<?php echo $id;?>">

				   <label>Nombre: </label>
				   <input name='nombre' type='text' value='<?php echo $row['nombre'];?>' <br>
	
				   <label>Apellidos: </label>
				   <input name='apellidos' type='text' value='<?php echo $row['apellidos'];?>' <br>	 

				   <label>Tipo de Usuario: </label>
				   <input name='tipo_de_usuario' type='text' value='<?php echo $row['tipo_de_usuario'];?>'<br>	
               
                                   <label>Correo: </label>
				   <input name='correo' type='text' value='<?php echo $row['correo'];?>' <br>

				   <label>Matricula: </label>
				   <input name='matricula' type='text' value='<?php echo $row['matricula'];?>' <br>

				   <label>CONTRASE&Ntilde;A: </label>
				   <input name='contra' type='text' value='<?php echo $row['contra'];?>' <br>
		 
	 			   <input type='submit' name='submit' value='Registrar'>
	 
				</form>
			
 	       </center>
	</body>
</html>




