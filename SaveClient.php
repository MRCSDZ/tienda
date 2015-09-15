<?php
	require ("conexiones/facturacion.php");

	$nombrenegocio = $_POST['nombrenegocio'];
	$direccion = $_POST['direccion'];
	$municipio = $_POST['municipio'];
	$idtelefono = $_POST['idtelefono'];
  $telefono = $_POST['telefono'];
  $rfc = $_POST['rfc'];
  $nombrerecibe = $_POST['nombrerecibe'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

			$query ="INSERT INTO cliente_negocio(nombre_negocio,
                        direccion,
                        id_municipio,
                        id_telefono,
                        telefono,
                        rfc,
                        nombre_recibe)
                VALUES ('$nombrenegocio',
                       '$direccion',
                       '$municipio',
                       '$idtelefono',
                       '$telefono',
                       '$rfc',
                       '$nombrerecibe')";
                       
			$resultado=$mysqli->query($query);
			
			if($resultado > 0){
          		echo "Cliente guardado";
        	}else{
           		echo "Error al Guardar cliente";       
        	}
 	?>
</body>
</html>