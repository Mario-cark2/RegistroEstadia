<?php
session_start();
   

if(isset($_POST['submit'])){
	if (empty($matricula)) {

		echo "<p class='error'>*Agrega tu matricula </p>";
	}
	
}else{
require('C:\xampp\htdocs\proyecto\conexion.php');

   $matricula = $_POST['matricula'];
    $contra = $_POST['contra'];
    $existe=0;

 $resultados=mysqli_query($conexion,"SELECT*FROM usuarios WHERE matricula='$matricula' AND contra='$contra' ");
 while($consulta=mysqli_fetch_array($resultados)){
 	$existe++;
 }
if($existe==0){
	?>
	<html>
	
		
		<script type="text/javascript">
  alert("matricula y/o contraseña incorrecta");
</script>
		<?php
	
	require('C:\xampp\htdocs\proyecto\Login.html');
	?>
	
	</html>
	<?php
	
}
else{
	

	require('C:\xampp\htdocs\proyecto\interfaz.html');
    }
    }

 ?>
