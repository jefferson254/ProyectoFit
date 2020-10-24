


<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM planes ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM planes WHERE nombre LIKE :campo OR apellidos LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>





<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro Planes</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link  rel="icon"   href="img/logo.jpg" type="image/jpg" />
</head>
<body  style="background-color:#95f3aa;">
	<div class="contenedor">
		<h2>Ingresar nuevos Planes</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar nombre" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="🔎 Buscar">
				<a href="insert.php" class="btn btn__nuevo">➕ Nuevo</a>

			</form>
		</div>
		<table>
			<tr class="head">
			
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Valor</td>
				<td>Tiempo</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
				
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['descripcion']; ?></td>
					<td><?php echo $fila['valor']; ?></td>
					<td><?php echo $fila['tiempo']; ?></td>
					<td><a href="update.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >✏️ Editar</a></td>
					<td><a href="delete.php?id=<?php echo $fila['id']; ?>" class="btn__delete">🗑 Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>
