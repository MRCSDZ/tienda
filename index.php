<?php
	require ("conexiones/facturacion.php");

	$producto = "SELECT stock.id_stock,
						stock.id_producto,
						stock.existencia,
						stock.precio,
						stock.id_presentacion,
						stock.fecha,
						producto.id_producto,
						producto.nombreproducto,
						presentacion.id_presentacion,
						presentacion.tipo_presentacion
	FROM producto, stock, presentacion
	WHERE stock.id_producto=producto.id_producto
	AND stock.id_presentacion = presentacion.id_presentacion";
	
	$resultado=$mysqli->query($producto); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/page.css">
	<link rel="stylesheet" type="text/css" href="menu/style.css">
	<link rel="stylesheet" type="text/css" href="menu/font.css">
</head>
<body>
	<header>
		 <?php require('menu/menu.html'); ?>
	</header>
	<div class="Product home-stock">
		<table class="Stock">
	        <thead>
	    	    <tr>
	                <th>Producto</th>
	                <th>Precio</th>
	                <th>Cantidad Disponible</th>
	                <th>Presentacion</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php while($row=$resultado->fetch_assoc()){ ?>
	             	<tr>
	                    <td><?php echo $row['nombreproducto'];?></td>
	                    <td><?php echo $row['precio'];?></td>
	                    <td><?php echo $row['existencia'];?></td>
	                    <td><?php echo $row['tipo_presentacion']; ?></td>
						<!-- <td><a href="PerfilCalibrador.php?id=<?php echo $row['idcalibrador'];?>">Ver Perfil</a></td> -->
	                </tr>
	            <?php } ?>
	        </tbody>
	    </table>
    </div>
</body>
</html>