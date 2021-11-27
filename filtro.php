<?php
require('C:\xampp\htdocs\proyecto\conexion.php');


   $titulo = $_POST['titulo'];
   $query="SELECT id_memorias,id_universidades,id_carrera,titulo,id_generacion,
   asesor_empresarial,alumno,id_grado,id_empresa,id_asesor_academico FROM memorias WHERE titulo LIKE '%$titulo%'";
   $resultado=$conexion->query($query);
   $rows = $resultado->num_rows;
?>

<html>
	<head>
		<title>memorias</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
<center>
		<h1> Memorias</h1>
	</center>
<br />
<a title="Regresar" href="edit.html"><img src="arrow.png" alt="Regresar" /></a>

 
		<br><br>
 
		
		<?php if($rows > 0) { ?>
		
		<table border=1 width='80%'>

			<thead>

	
				<tr>
					<td><b>UNIVERSIDAD</b></td>
					<td><b>CARRERA</b></td>
					<td><b>TITULO</b></td>
					<td><b>GENERACION</b></td>
					<td><b>ASESOR EMPRESARIAL</b></td>
					<td><b>ALUMNO</b></td>
                    <td><b>GRADO</b></td>
                    <td><b>EMPRESA</b></td>
                    <td><b>ASESOR ACADEMICO</b></td>
                    
                    

					
					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>

						<tr>

							<td>
								<?php echo $row['id_universidades'];?>
							</td>
							<td>
								<?php echo $row['id_carrera'];?>
							</td>

							<td>
								<?php echo $row['titulo'];?>
							</td>
							<td>
								<?php echo $row['id_generacion'];?>
							</td>
							<td>
								<?php echo $row['asesor_empresarial'];?>
							</td>
							<td>
								<?php echo $row['alumno'];?>
							</td>
							<td>
								<?php echo $row['id_grado'];?>
							</td>
							<td>
								<?php echo $row['id_empresa'];?>
							</td>
							<td>
								<?php echo $row['id_asesor_academico'];?>
							</td>


                        							
						</tr>
					<?php } ?>
				</tbody>
			</table>
			
		<?php } else { ?>
<?php
header ("Location: error_memoria.html");
?>
		<?php } ?>


		</body>
	</html>	
	


















