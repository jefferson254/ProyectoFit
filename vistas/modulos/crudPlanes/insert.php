<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$valor=$_POST['valor'];
		$tiempo=$_POST['tiempo'];


		if(!empty($nombre) && !empty($descripcion) && !empty($valor) && !empty($tiempo)){
		
				$consulta_insert=$con->prepare('INSERT INTO planes(nombre,descripcion,valor,tiempo) VALUES(:nombre,:descripcion,:valor,:tiempo)');
				$consulta_insert->execute(array(
					':nombre' =>$nombre,
					':descripcion' =>$descripcion,
					':valor' =>$valor,
					':tiempo' =>$tiempo
				));
				header('Location: index.php');
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}

	}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Plan</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body style="background-color:#95f3aa;">
	<div class="contenedor">
		<h2>Ingrese Nuevo Registro</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="descripcion" placeholder="descripción" class="input__text">
			</div>
			
			<div class="form-group">
				<input type="text" name="valor" placeholder="valor" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="tiempo" placeholder="Tiempo" class="input__text">
			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
