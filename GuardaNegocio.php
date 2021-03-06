<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/
require('Conexiones/conexion.php');

//LLAMAR PARAMETROS POST
    $nombre  =   $_POST["nombre"];
    $rfc     =   $_POST["rfc"];
    $calle   =   $_POST["calle"];
    $numero  =   $_POST["numero"];
    $colonia =   $_POST["colonia"];
    $ciudad  =   $_POST["ciudad"];

    $query=" INSERT INTO negocio(nombre,
                                 rfc,
                                 colonia,
                                 calle, 
                                 numero, 
                                 ciudad
                                )
                        
                VALUES ('$nombre',
                        '$rfc',
                        '$colonia',
                        '$calle',
                        '$numero',
                        '$ciudad'
                        )";
                        
    $resultado=$mysqli->query($query);
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

    <title>DISTC- Distribuidora de Chamoy</title>

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
                        <h1 class="page-header">Distribuidora de Chamoy</h1>
                    </div>


                    <div class="col-lg-12">
                        
                         <?php if($resultado>0){ ?>
                                <h3>Negocio Guardado</h3>
                                <?php
                                    
                                    
                                ?>

                
                                <?php }else{ ?>
                                <h1>Error al Guardar el Equipo</h1>     
                                <?php   } ?>        
                                <p></p> 
                                <a href="AgregarEquipo.php">Regresar</a>
                            </center>
                            
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
