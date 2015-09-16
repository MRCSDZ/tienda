<?php 
/******************  NO BORRAR  ******************/
session_start();
require("admin/instancia.txt");
/******************  NO BORRAR  ******************/

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
                        <h1 class="page-header">Negocio Nuevo</h1>
                    </div>


                    <div class="col-lg-6">
                        <form action="GuardaNegocio.php" method="POST">
                        
                            <b>Nombre del negocio:</b> <input type="text" name="negocio" class="form-control" placeholder="Mi Empresa SA. de CV." Required> <br>
                            <b>RFC:</b> <input type="text" name="rfc" class="form-control" placeholder="RFCXXXXXXXXX"><br>
                            <b>Direccion</b><br>
                            Calle: <input type="text" name="calle" class="form-control" placeholder="Ingrese su calle" required> <br>
                            Numero: <input type="text" name="numero" class="form-control" placeholder="Ej. 10500 o 3100-A" required><br>
                            Colonia:  <input type="text" name="colonia" class="form-control" placeholder="Ingrese su colonia" required> <br>
                            Ciudad: <select name="ciudad" id="" class="form-control"> 
                                        <option value="tijuana">Tijuana</option> 
                                        <option value="mexicali">Mexicali</option> 
                                        <option value="ensenada">Ensenada</option> 
                                        <option value="rosarito">Rosarito</option>
                                        <option value="tecate">Tecate</option>
                                    </select>
                            <br>
                            <input type="submit" value="Registrar Negocio" class="btn btn-default">
                            <br>
                            <br>
                            <br>
                        </form>


                    </div>

                    <div class="col-lg-12">
                        <!--CAJA #1-->            
                        
                        <!--CAJA #4-->

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
