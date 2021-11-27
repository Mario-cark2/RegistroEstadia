<?php
require('C:\xampp\htdocs\proyecto\conexion.php');
$universidad=$_POST['universidad'];
$carrera=$_POST['carrera'];
$titulo=$_POST['titulo'];
$generacion=$_POST['generacion'];
$asesor_empresarial=$_POST['asesor_empresarial'];
$alumno=$_POST['alumno'];
$grado=$_POST['grado'];
$empresa=$_POST['empresa'];
$asesor_academico=$_POST['asesor_academico'];
 
$sql="INSERT INTO memorias(id_universidades,id_carrera,titulo,id_generacion,asesor_empresarial,alumno,id_grado,id_empresa,id_asesor_academico)
VALUES('$universidad','$carrera','$titulo','$generacion','$asesor_empresarial','$alumno','$grado','$empresa','$asesor_academico)";
$result=$conexion->query($sql);
?>


 






<html>
<head>
<title>Guardar datos del Usuario</title>
</head>
<body>
<center>
<?php if($result>0){ ?>
<h1>Datos de la memoria guardados </h1>
Tus datos han sido guardados favor de hacer click<A HREF="agregar.html">a qui</A> para continuar<br>
<?php }else{ ?>
<h1> Error al guardar datos de la memoria</h1>
<?php } ?>
</body>
</html>