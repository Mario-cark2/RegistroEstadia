<!DOCTYPE html>
<html>
<head>
	<title>Registro de Estadia</title>
	<link rel="shortcut icon" href="img/docn.png"/>
</head>
	<link rel="stylesheet" type="text/css" href="css/rstm.css">
<body>

<div class="resgisterbox">		
           	<img class="logo" src="img/docn.png" alt="Ut memorias">
           	<h1>Nueva memoria</h1>
           	<div class="izq">
           	<FORM ACTION="registro_memoria.php" METHOD="POST">                
			<label for="Usuario">Universidad</label><br>
			<input type="text"  NAME="universidad" placeholder="Ingresa la Universidad"><br>
			<label for="Usuario">Carrera</label><br>
			<input type="text"  NAME="carrera" placeholder="Ingresa tu carrera"><br>
			<label for="Usuario">Titulo</label><br>
			<input type="text"  NAME="titulo" placeholder="Ingresa el titulo"><br>
			<label for="Usuario">Generacion</label><br>
			<input type="text" NAME="generacion" placeholder="Ingresa la generacion"><br>
   			</div>
   			<div class="der"> 
            <label for="Usuario">Asesor empresarial</label><br>
			<input type="text"  NAME="asesor_empresarial" placeholder="Ingresa el asesor empresarial"><br>
            <label for="Usuario">Alumno</label><br>
			<input type="text"  NAME="alumno" placeholder="Ingresa el nombre del alumno"><br>
            <label for="Usuario">Grado</label><br>
			<input type="text"  NAME="grado" placeholder="Ingresa el grado"><br>
            <label for="Usuario">Empresa</label><br>
			<input type="text"  NAME="empresa" placeholder="Ingresa la empresa"><br>
            <label for="Usuario">Asesor academico</label><br>
			<input type="text"  NAME="asesor_academico" placeholder="Ingresa el asesor academico"><br>
			</div> 
<br>	
			 <input type="submit" value="Registrar"></form>
</body>
</html>