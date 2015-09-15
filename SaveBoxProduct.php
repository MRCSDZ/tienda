<?php
	require ("conexiones/facturacion.php");

	$id_producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$id_presentacion = $_POST['presentacion'];
	$precio = $_POST['precio'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if ($id_presentacion == 1 ){
			$cantidad = $cantidad * 4;

			$query ="INSERT INTO stock(id_producto,
                        existencia,
                        precio,
                        id_presentacion,
                        fecha)
                VALUES ('$id_producto',
                       '$cantidad',
                       '$precio',
                       '$id_presentacion',
                       now())";
                       
			$resultado=$mysqli->query($query);
			
			if($resultado>0){
          		echo "Producto guardado";
        	}else{
           		echo "Error al Guardar producto";       
        	}
		}
		elseif ($id_presentacion == 2 ){
			$cantidad = $cantidad * 12;

			$query ="INSERT INTO stock(id_producto,
                        existencia,
                        precio,
                        id_presentacion,
                        fecha)
                VALUES ('$id_producto',
                       '$cantidad',
                       '$precio',
                       '$id_presentacion',
                       now())";
                       
			$resultado=$mysqli->query($query);
			
			if($resultado>0){
          		echo "Producto guardado";
        	}else{
           		echo "Error al Guardar producto";       
        	}
		}
		elseif ($id_presentacion == 3 ){
			$cantidad = $cantidad * 20;

			$query ="INSERT INTO stock(id_producto,
                        existencia,
                        precio,
                        id_presentacion,
                        fecha)
                VALUES ('$id_producto',
                       '$cantidad',
                       '$precio',
                       '$id_presentacion',
                       now())";
                       
			$resultado=$mysqli->query($query);
			
			if($resultado>0){
          		echo "Producto guardado";
        	}else{
           		echo "Error al Guardar producto";       
        	}
		}
 	?>
</body>
</html>