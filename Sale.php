<?php
	require ("conexiones/facturacion.php");

	$negocio = "SELECT id_cliente_negocio,
					   nombre_negocio,
					   direccion,
					   nombre_recibe
	FROM cliente_negocio";
	
	$resultado=$mysqli->query($negocio); 
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
		<div class="Product sale-client">
		<table class="Stock">
	        <thead>
	    	    <tr>
	                <th>Seleccionar</th>
	                <th>Quien recibe</th>
	                <th>Negocio</th>
	                <th>Direccion</th>
	                <th>Modificar quien recibe</th>
	            </tr>
	        </thead>
	        <tbody>
	            <?php while($row=$resultado->fetch_assoc()){ ?>
	             	<tr>
	                    <td><a href="#" id="negocio"><?php echo $row['id_cliente_negocio'];?></a></td>
	                    <td><?php echo $row['nombre_recibe']; ?></td>
	                    <td><?php echo $row['nombre_negocio'];?></td>
	                    <td><?php echo $row['direccion'];?></td>
	                    <td><a href="ModificarNegocio.php?id=<?php echo $row['id_cliente_negocio'];?>">Ver Perfil</a></td>		
	                </tr>
	            <?php } ?>
	        </tbody>
	    </table>
	    </br>
	    <div class="SelecProceso">
	    	Negocio Seleccionado
	    </div>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function() 
    {
    	$('#negocio').click(function() 
    	{	
    		var negocio = $('#negocio').text()
  			$('.SelecProceso').append("<input type='text' disabled='disabled' class='idnegocio' value="+ negocio +">");
		});
    });
</script>
</body>
</html>