<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/

require('Conexiones/BDctrlherramienta.php');
  
  $mod=$_POST['mod'];
  
  

$query="SELECT idherramienta, 
               marca, 
               modelo, 
               tipo, 
               descripcion, 
               ubicacion,
               count(idherramienta) as cantidadherramienta 
          FROM herramienta 
         WHERE modelo = '$mod' 
         LIMIT 1";
  $resultado=$mysqli->query($query);
  $row=$resultado->fetch_assoc(); 


$query2="SELECT count(bodegaherramienta.idbodegaherramienta) as cantidadherramientabodega, 
                herramienta.idherramienta, 
                bodegaherramienta.idherramienta, 
                herramienta.modelo 
           FROM bodegaherramienta, herramienta 
          WHERE bodegaherramienta.idherramienta = herramienta.idherramienta AND herramienta.modelo= '$mod'";
  $resultado2=$mysqli->query($query2);
  $row2=$resultado2->fetch_assoc(); 
  

 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="shortcut icon" type="image/png" href="/imagenes/favicon.png" />

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISEH- Sistema de Control de Equipos y Herramientas</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- NAVEGACION -->
         <?php require('menu/menu.php'); ?>
        <!-- NAVEGACION -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Baja Herramienta</h1>
                    </div>

                    
                    <div class="col-lg-6">
                        Marca</br>
                        <?php echo $row['marca']; ?>
                        </br></br>
                        Modelo</br>
                        <?php echo $row['modelo']; ?>
                        </br></br>
                        Tipo</br>
                        <?php echo $row['tipo']; ?>
                        </br></br>
                        Desripcion</br>
                        <?php echo $row['descripcion']; ?>
                        </br></br>
                        Cantidad Total</br>
                        <?php echo $row['cantidadherramienta']; ?>
                        </br></br>
                        Cantidad Bodega</br>
                        <?php echo $row2['cantidadherramientabodega']; ?>
                        </br></br>      
              
                        <form action="Bajaherramienta.php" method="POST">  
                            <input type="hidden" name="mod" value="<?php echo $mod; ?>">
                            <input type="hidden" name="cantidad" value="<?php echo $row['cantidad']; ?>"/>
                            <input type="hidden" name="cantidadb" value="<?php echo $row2['cantidadherramientabodega']; ?>"/>
                                      
                            Ingrese Cantidad</br>
                            <input class="form-control" type="number" name="cantidadborrar"  min='0' max='<?php echo $row2['cantidadherramientabodega']; ?>' required/>
                            </br></br>
                       
                            <input class="btn btn-default" type="submit" name="Guardar" value="Guardar" />
                        </form>
            
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
