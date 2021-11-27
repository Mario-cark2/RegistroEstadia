<?php
require('C:\xampp\htdocs\proyecto\conexion.php');

   $nombre = $_POST['nombre'];
   $query="SELECT id_usuarios,nombre,apellidos,tipo_de_usuario,correo,matricula,contra FROM usuarios WHERE nombre LIKE '%$nombre%'";
$r = $response->execute();
	if($r){
		echo "Si,datos guardados";
	}else echo"error";
?>

?>

<html>
	<head>
		<title>Usuarios</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
<center>
		<img src="https://images.cooltext.com/5305865.png" width="373" height="92" alt="Usuarios" />
	</center>
<br />
<a title="Regresar" href="edit.html"><img src="arrow.png" alt="Regresar" /></a>

 
		<br><br>
 
		
		<?php if($rows > 0) { ?>
		
		<table border=1 width='80%'>

			<thead>

	
				<tr>
					<td><b>NOMBRE</b></td>
					<td><b>APELLIDOS</b></td>
					<td><b>TIPO DE USUARIO</b></td>
					<td><b>CORREO</b></td>
					<td><b>MATRICULA</b></td>
					<td><b>CONTRASE&Ntilde;A</b></td>
                    <td><b>MODIFICAR</b></td>
                    <td><b>ELIMINAR</b></td>
					
					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>

						<tr>

							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['apellidos'];?>
							</td>

							<td>
								<?php echo $row['tipo_de_usuario'];?>
							</td>
							<td>
								<?php echo $row['correo'];?>
							</td>
							<td>
								<?php echo $row['matricula'];?>
							</td>
							<td>
								<?php echo $row['contra'];?>
							</td>
                            
                             <td>
							 <A HREF="modificar.php?id=<?php echo $row['id_usuarios']; ?>">Modificar</A>	
							</td>
                            <td>
							 <A HREF="eliminar.php?id=<?php echo $row['id_usuarios']; ?>">eliminar</A>	
							</td>

							
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		<?php } else { ?>
<?php
header ("Location: error.html");
?>
		<?php } ?>


		</body>
	</html>	
	


















