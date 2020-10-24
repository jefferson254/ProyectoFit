<?php
	include_once 'conexion.php';

	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];

		$buscar_id=$con->prepare('SELECT * FROM planes WHERE id=:id LIMIT 1');
		$buscar_id->execute(array(
			':id'=>$id
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}


	if(isset($_POST['guardar'])){
		$nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
		$valor=$_POST['valor'];
		$tiempo=$_POST['tiempo'];
		$id=(int) $_GET['id'];

		if(!empty($nombre) && !empty($descripcion) && !empty($valor) && !empty($tiempo)  ){
	
				$consulta_update=$con->prepare(' UPDATE planes SET  
					nombre=:nombre,
					descripcion=:descripcion,
					valor=:valor,
					tiempo=:tiempo
					WHERE id=:id;'
				);
				$consulta_update->execute(array(
					':nombre' =>$nombre,
					':descripcion' =>$descripcion,
					':valor' =>$valor,
					':tiempo' =>$tiempo,
					':id' =>$id
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
	<title>Editar Plan</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body style="background-color:#95f3aa;">
	<div class="contenedor">
		<h2>Modifique sus Datos</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre" value="<?php if($resultado) echo $resultado['nombre']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="descripcion" value="<?php if($resultado) echo $resultado['descripcion']; ?>" class="input__text">

			</div>
			<div class="form-group">
				<input type="text" name="valor" value="<?php if($resultado) echo $resultado['valor']; ?>" class="input__text">

			</div>
			<div class="form-group">
				<input type="text" name="tiempo" value="<?php if($resultado) echo $resultado['tiempo']; ?>" class="input__text">

			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
