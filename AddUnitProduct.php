<?php
	require ("conexiones/facturacion.php");
	
	$presentacion = "SELECT * FROM presentacion";
	$resultado=$mysqli->query($presentacion);

	$producto = "SELECT * FROM producto";
	$resultado2=$mysqli->query($producto); 
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
	<div class="Product Add-Unit">
		<form action="SaveUnitProduct.php" method="POST">
				<p>Producto</p>			
				<select name="producto">
					<?php 
						foreach($resultado2 as $producto){ ?>
			                <option value="<?php echo $producto['id_producto']; ?>">
			                	<?php echo $producto['nombreproducto']; ?>
			                </option> 
			    	<?php } ?>
				</select>
				
				<p>Presentacion</p>
				<select name="presentacion">
					<?php 
						foreach($resultado as $presentaciones){ ?>
			                <option value="<?php echo $presentaciones['id_presentacion']; ?>">
			                   	<?php echo $presentaciones['tipo_presentacion']; ?>
			                </option> 
			    	<?php } ?>
				</select>

				<p>Cantidad</p> <!--Esta cantidad se agregara a existencia-->
				<input name="cantidad" type="text">
				
				<p>Precio</p>
				<input name="precio" type="text">
				
				<input type="submit" value="Guardar" class="guardar">
		</form>
	</div>
</body>
</html>