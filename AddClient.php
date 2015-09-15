<?php
	require ("conexiones/facturacion.php");
	
	$municipio = "SELECT * FROM municipio";
	$resultado=$mysqli->query($municipio);

	$telefono = "SELECT * FROM telefono";
	$resultado2=$mysqli->query($telefono); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="menu/style.css">
	<link rel="stylesheet" type="text/css" href="menu/font.css">
	<link rel="stylesheet" type="text/css" href="public/css/page.css">
</head>
<body>
	<header>
		<?php require('menu/menu.html'); ?>
	</header>
	<div class="Client">
		<form method="POST" action="SaveClient.php">
			<p>Nombre del negocio</p>
			<input type="text" name="nombrenegocio">
			
			<p>Direccion</p>
			<input type="text" name="direccion">
			
			<p>Municipio</p>
			<select name="municipio">
				<?php 
					foreach($resultado as $municipio){ ?>
			            <option value="<?php echo $municipio['id_municipio']; ?>">
			               	<?php echo $municipio['nombre_municipio']; ?>
			            </option> 
			    <?php } ?>
			</select>
			
			<p>Telefono</p>
			<select name="idtelefono">
				<?php 
					foreach($resultado2 as $idtelefono){ ?>
			            <option value="<?php echo $idtelefono['id_telefono']; ?>">
			               	<?php echo $idtelefono['tipo_telefono']; ?>
			            </option> 
			    <?php } ?>
			</select>
			<input type="text" name="telefono">

			<p>RFC</p>
			<input type="text" name="rfc">

			<!--<p>Precio</p>
			<input type="number" name="precio">-->

			<p>Nombre de quien recibe</p>
			<input type="text" name="nombrerecibe">

			<input type="submit" value="Guardar" class="guardar">
		</form>
	</div>
</body>
</html>